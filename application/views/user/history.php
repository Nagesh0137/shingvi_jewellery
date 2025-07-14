<style type="text/css">
  .history-section {
    padding: 60px 0;
    background-color: #f9f9f9;
  }
  
  .history-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #333;
    text-align: center;
    margin-bottom: 50px;
    position: relative;
  }
  
  .history-title:after {
    content: '';
    display: block;
    width: 100px;
    height: 3px;
    background-color: #B32726;
    margin: 15px auto 0;
  }
  
  .history-item {
    margin-bottom: 60px;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
    display: flex;
    flex-wrap: wrap;
  }
  
  .history-item:hover {
    transform: translateY(-5px);
  }
  
  .history-image-container {
  flex: 0 0 50%;
  max-width: 50%;
  position: relative;
  overflow: hidden;
  height: auto; /* ensure image container grows with content */
}

  
  .history-image {
  width: 100%;
  height: auto;           /* Let the image adapt based on its width */
  max-height: 100%;       /* Prevent it from stretching beyond parent */
  object-fit: cover;
  display: block;
}

  
  .history-content-container {
    flex: 0 0 50%;
    max-width: 50%;
  }
  
  .history-content {
    padding: 30px;
    height: 100%;
  }
  
  .history-content h3 {
    font-family: 'Playfair Display', serif;
    color: #B32726;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 15px;
  }
  
  .history-content h3:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background-color: #ddd;
  }
  
  .history-text {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
  }
  
  /* Full width when no image */
  .history-item.no-image .history-content-container {
    flex: 0 0 100%;
    max-width: 100%;
  }
  
  @media (max-width: 768px) {
    .history-image-container,
    .history-content-container {
      flex: 0 0 100%;
      max-width: 100%;
    }
    
    .history-image {
      min-height: 250px;
    }
    
    .history-content {
      padding: 20px;
    }
  }
</style>

<section class="history-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="history-title">OUR HISTORY</h2>
      </div>
    </div>
    
    <?php foreach($web_history_details as $row): ?>
      <div class="history-item <?= empty($row['history_image']) ? 'no-image' : '' ?>">
        <?php if(!empty($row['history_image'])): ?>
          <div class="history-image-container">
            <img src="<?=base_url()?>uploads/<?=$row['history_image']?>" 
                 alt="<?=$row['history_title']?>" 
                 class="history-image">
          </div>
        <?php endif; ?>
        
        <div class="history-content-container">
          <div class="history-content">
            <h3><?=$row['history_title']?></h3>
            <div class="history-text"><?=$row['history_desc']?></div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>