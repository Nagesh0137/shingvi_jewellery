<!-- Page content -->
<main class="content-wrapper">
    <div class="container py-5 mb-2 mb-sm-3 mb-md-4 mb-lg-5 mt-lg-3 mt-xl-4">

        <!-- Page title -->
        <div class="text-center mb-5">
            <h1 class="mb-3">Frequently Asked Questions</h1>
            <em class="text-muted">Everything you need to know about VIP mobile numbers and our services</em>
        </div>

        <!-- Search FAQ -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <div class="position-relative">
                    <input type="text" class="form-control form-control-lg rounded-pill ps-5"
                        placeholder="Search FAQ..." id="faqSearch">
                    <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                </div>
            </div>
        </div>



        <!-- FAQ Accordion -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion">
                    <?php if (!empty($faq)): ?>
                        <?php foreach ($faq as $index => $faq_item): ?>
                            <?php
                            // Auto-categorize based on question content
                            $question_lower = strtolower($faq_item['question']);
                            $category = 'general'; // default
                    
                            if (
                                strpos($question_lower, 'price') !== false ||
                                strpos($question_lower, 'cost') !== false ||
                                strpos($question_lower, 'payment') !== false ||
                                strpos($question_lower, 'fee') !== false ||
                                strpos($question_lower, 'charge') !== false ||
                                strpos($question_lower, 'money') !== false
                            ) {
                                $category = 'pricing';
                            } elseif (
                                strpos($question_lower, 'how') !== false ||
                                strpos($question_lower, 'process') !== false ||
                                strpos($question_lower, 'purchase') !== false ||
                                strpos($question_lower, 'buy') !== false ||
                                strpos($question_lower, 'delivery') !== false ||
                                strpos($question_lower, 'step') !== false
                            ) {
                                $category = 'process';
                            } elseif (
                                strpos($question_lower, 'legal') !== false ||
                                strpos($question_lower, 'warranty') !== false ||
                                strpos($question_lower, 'refund') !== false ||
                                strpos($question_lower, 'policy') !== false ||
                                strpos($question_lower, 'law') !== false ||
                                strpos($question_lower, 'registered') !== false
                            ) {
                                $category = 'legal';
                            } elseif (
                                strpos($question_lower, 'carrier') !== false ||
                                strpos($question_lower, 'port') !== false ||
                                strpos($question_lower, 'sim') !== false ||
                                strpos($question_lower, 'network') !== false ||
                                strpos($question_lower, 'technical') !== false ||
                                strpos($question_lower, 'transfer') !== false
                            ) {
                                $category = 'technical';
                            }
                            ?>
                            <div class="faq-item" data-category="<?= $category ?>">
                                <div class="accordion-item border-0 rounded-4 mb-3 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed rounded-4 fw-semibold ps-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq<?= $index + 1 ?>">
                                            <?= htmlspecialchars($faq_item['question']) ?>
                                        </button>
                                    </h2>
                                    <div id="faq<?= $index + 1 ?>" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body ps-2 ">
                                            <?= nl2br(htmlspecialchars($faq_item['answer'])) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="text-center py-5">
                            <div class="alert alert-info">
                                <i class="ci-info-circle me-2"></i>
                                <strong>No FAQs available at the moment.</strong><br>
                                Please check back later or contact our support team for any questions.
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <!-- Contact CTA -->
        <div class="text-center mt-5 pt-4">
            <div class="bg-light rounded-5 p-4 p-md-5">
                <h3 class="mb-3">Still have questions?</h3>
                <p class="text-muted mb-4">Our VIP number experts are here to help you find the perfect number for your
                    needs.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="<?= base_url() ?>user/contact" class="btn btn-primary btn-lg rounded-pill">
                        <i class="ci-mail me-2"></i>Contact Us
                    </a>
                    <a href="tel:<?= $social_media['contact_no'] ?? '' ?>"
                        class="btn btn-outline-primary btn-lg rounded-pill">
                        <i class="ci-phone me-2"></i>Call Now
                    </a>
                </div>
            </div>
        </div>

    </div>
</main>

<!-- FAQ JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Search functionality
        const searchInput = document.getElementById('faqSearch');
        const faqItems = document.querySelectorAll('.faq-item');
        const categoryButtons = document.querySelectorAll('.faq-category');

        // Search filter
        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase();

            faqItems.forEach(item => {
                const title = item.querySelector('.accordion-button').textContent.toLowerCase();
                const content = item.querySelector('.accordion-body').textContent.toLowerCase();

                if (title.includes(searchTerm) || content.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Category filter
        categoryButtons.forEach(button => {
            button.addEventListener('click', function () {
                const category = this.dataset.category;

                // Update active button
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Filter FAQ items
                faqItems.forEach(item => {
                    if (category === 'all' || item.dataset.category === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Clear search when category changes
                searchInput.value = '';
            });
        });

        // Auto-expand based on URL hash
        if (window.location.hash) {
            const targetElement = document.querySelector(window.location.hash);
            if (targetElement && targetElement.classList.contains('accordion-collapse')) {
                setTimeout(() => {
                    targetElement.classList.add('show');
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 100);
            }
        }
    });
</script>

<style>
    .faq-category.active {
        background-color: var(--bs-primary);
        color: white;
        border-color: var(--bs-primary);
    }

    .accordion-button:not(.collapsed) {
        background-color: #f8f9fa;
        color: var(--bs-primary);
    }

    .accordion-button:focus {
        box-shadow: none;
        border-color: var(--bs-primary);
    }

    .timeline {
        border-left: 2px solid #e9ecef;
        padding-left: 1rem;
        margin-left: 1rem;
    }

    .badge {
        min-width: 32px;
        min-height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media (max-width: 768px) {
        .d-flex.flex-column.flex-sm-row {
            flex-direction: column;
        }

        .faq-category {
            font-size: 0.875rem;
            padding: 0.375rem 0.75rem;
        }
    }
</style>