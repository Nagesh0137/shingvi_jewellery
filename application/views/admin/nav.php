<div class="startbar d-print-none">
    <?php
    $this->config->load('navbar_urls');
    $navbar = $this->config->item('navbar');
    $current_url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    // Get all permitted URLs for current admin position
    $permitted_urls = [];
    if (isset($_SESSION['admin_position_id'])) {
        $query = $this->db->query("
            SELECT apu.admin_permission_url 
            FROM admin_permission_urls apu
            JOIN admin_permission ap ON apu.admin_permission_urls_id = ap.admin_permission_urls_id
            JOIN admin_position apos ON ap.admin_position_id = apos.admin_position_id
            WHERE apos.admin_position_id = '" . $_SESSION['admin_position_id'] . "'
            AND apu.status = 'active'
            AND apos.status = 'active'
        ");
        $permitted_urls = array_column($query->result_array(), 'admin_permission_url');
    }
    ?>

    <!-- Brand Section -->
    <div class="brand">
        <a href="<?= base_url() ?>" class="logo">
            <span>
                <img src="<?= base_url() ?>uploads/<?= $company_det[0]['company_logo'] ?>" alt="logo-large" style="width: 40px;background-repeat: no-repeat;" height="40px" class="logo-lg logo-dark">
            </span>
        </a>
    </div>

    <!-- Menu Section -->
    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <ul class="navbar-nav mb-auto w-100">
                    <?php foreach ($navbar as $key => $item): ?>
                        <?php
                        // Check if admin has permission for this menu item
                        $has_permission = false;
                        $menu_method = $item['method'] ?? '';

                        // If method is empty or in permitted URLs
                        if (empty($menu_method) || in_array($menu_method, $permitted_urls)) {
                            $has_permission = true;
                        }

                        // Skip if no permission
                        if (!$has_permission) continue;

                        $is_active = false;
                        $menu_url = !empty($item['href']) ? trim($item['href'], '/') : '#!';

                        if (!empty($menu_url) && strpos($current_url, $menu_url) !== false) {
                            $is_active = true;
                        }
                        ?>

                        <li class="nav-item <?= $is_active ? 'active' : '' ?>">
                            <?php if (isset($item['submenu'])): ?>
                                <?php
                                // Check if any submenu items have permission
                                $has_sub_permission = false;
                                $visible_subitems = [];

                                foreach ($item['submenu'] as $subitem) {
                                    $sub_method = $subitem['method'] ?? '';
                                    if (empty($sub_method) || in_array($sub_method, $permitted_urls)) {
                                        $has_sub_permission = true;
                                        $visible_subitems[] = $subitem;
                                    }
                                }

                                // Only show if at least one subitem has permission
                                if ($has_sub_permission):
                                ?>
                                    <a class="nav-link collapsed" href="#sidebar<?= ucfirst($key) ?>"
                                        data-bs-toggle="collapse" role="button" aria-expanded="<?= $is_active ? 'true' : 'false' ?>"
                                        aria-controls="sidebar<?= ucfirst($key) ?>">
                                        <i class="<?= $item['icon'] ?> menu-icon"></i>
                                        <span><?= $item['title'] ?></span>
                                    </a>
                                    <div class="collapse <?= $is_active ? 'show' : '' ?>" id="sidebar<?= ucfirst($key) ?>">
                                        <ul class="nav flex-column">
                                            <?php foreach ($visible_subitems as $subitem): ?>
                                                <?php
                                                $sub_url = trim($subitem['url'], '/');
                                                $is_sub_active = (!empty($sub_url) && strpos($current_url, $sub_url) !== false);
                                                ?>
                                                <li class="nav-item <?= $is_sub_active ? 'active' : '' ?>">
                                                    <a class="nav-link" href="<?= base_url($subitem['url']) ?>">
                                                        <?= $subitem['title'] ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <a class="nav-link" href="<?= base_url($item['href']) ?>">
                                    <i class="<?= $item['icon'] ?> menu-icon"></i>
                                    <span><?= $item['title'] ?></span>
                                </a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- <div class="startbar-overlay d-print-none"></div> -->
<!-- end leftbar-tab-menu-->

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">