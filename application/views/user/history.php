<style type="text/css">
  .history-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
    overflow: hidden;
  }

  .history-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, #B32726, transparent);
  }

  .history-title {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    font-weight: 700;
    color: #2c3e50;
    text-align: center;
    margin-bottom: 60px;
    position: relative;
    letter-spacing: -0.5px;
  }

  .history-title:after {
    content: '';
    display: block;
    width: 120px;
    height: 4px;
    background: linear-gradient(90deg, #B32726, #d63031);
    margin: 20px auto 0;
    border-radius: 2px;
  }

  .history-item {
    margin-bottom: 80px;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-wrap: wrap;
    position: relative;
    border: 1px solid rgba(179, 39, 38, 0.1);
  }

  .history-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 60px rgba(179, 39, 38, 0.15);
  }

  .history-item:nth-child(even) {
    flex-direction: row-reverse;
  }

  .history-image-container {
    flex: 0 0 50%;
    max-width: 50%;
    position: relative;
    overflow: hidden;
    background: linear-gradient(45deg, #f8f9fa, #e9ecef);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px;
  }

  .history-image {
    width: 60%;
    height: auto;
    max-height: 400px;
    object-fit: contain;
    border-radius: 12px;
    transition: transform 0.4s ease;
    /* box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); */
  }

  .history-item:hover .history-image {
    /* transform: scale(1.05); */
  }

  .history-content-container {
    flex: 0 0 50%;
    max-width: 50%;
    display: flex;
    align-items: center;
  }

  .history-content {
    padding: 50px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .history-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    font-weight: 600;
    color: #B32726;
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 20px;
    line-height: 1.3;
  }

  .history-content h3:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #B32726, #d63031);
    border-radius: 2px;
  }

  .history-text {
    font-size: 17px;
    line-height: 1.8;
    color: #4a5568;
    font-weight: 400;
    text-align: justify;
    margin-bottom: 20px;
  }

  .history-text p {
    margin-bottom: 15px;
  }

  /* Decorative elements */
  .history-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    /* background: linear-gradient(90deg, #B32726, #d63031, #B32726); */
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .history-item:hover::before {
    opacity: 1;
  }

  /* Full width when no image */
  .history-item.no-image .history-content-container {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .history-item.no-image .history-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
  }

  .history-item.no-image .history-content h3:after {
    left: 50%;
    transform: translateX(-50%);
  }

  /* Timeline effect for alternating layout */
  .history-container {
    position: relative;
  }

  @media (min-width: 992px) {
    .history-container::before {
      content: '';
      position: absolute;
      left: 50%;
      top: 0;
      bottom: 0;
      width: 2px;
      background: linear-gradient(180deg, transparent, #B32726, transparent);
      transform: translateX(-50%);
      z-index: 1;
    }

    .history-item::after {
      content: '';
      position: absolute;
      top: 50%;
      width: 20px;
      height: 20px;
      background: #B32726;
      border: 4px solid white;
      border-radius: 50%;
      transform: translateY(-50%);
      box-shadow: 0 3px 10px rgba(179, 39, 38, 0.3);
      z-index: 2;
    }

    .history-item:nth-child(odd)::after {
      right: -10px;
    }

    .history-item:nth-child(even)::after {
      left: -10px;
    }
  }

  @media (max-width: 991px) {
    .history-item:nth-child(even) {
      flex-direction: row;
    }
  }

  @media (max-width: 768px) {
    .history-section {
      padding: 60px 0;
    }

    .history-title {
      font-size: 2.5rem;
      margin-bottom: 40px;
    }

    .history-image-container,
    .history-content-container {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .history-image-container {
      padding: 30px;
    }

    .history-image {
      max-height: 250px;
    }

    .history-content {
      padding: 30px;
    }

    .history-content h3 {
      font-size: 1.8rem;
    }

    .history-text {
      font-size: 16px;
    }

    .history-item {
      margin-bottom: 40px;
    }
  }

  @media (max-width: 576px) {
    .history-title {
      font-size: 2rem;
    }

    .history-content {
      padding: 20px;
    }

    .history-content h3 {
      font-size: 1.6rem;
    }

    .history-image-container {
      padding: 20px;
    }
  }
</style>
   <div class="container pt-5 pb-5">
         <div class="row">
                    <?php foreach($web_history_details as $row)
        {
            ?>
             <div class="col-12">
                
             <?php
             if(!empty($row['history_image']))
             {
                 ?>
                 
                     <img src="<?= base_url() ?>uploads/<?= $row['history_image'] ?>"
                alt="<?= htmlspecialchars($row['history_title']) ?>"
                class="p-2 pr-3 me-5 bg-white border border-light" style="float:left;height:220px;"
                loading="lazy">
                
                  
                 <?php
             }
           ?>
           <div >
               <h3><?= htmlspecialchars($row['history_title']) ?></h3>
              <div class=" m-2 pl-5"><?= $row['history_desc'] ?></div>
           </div>
           
          
             </div>
              <?php
        }
        ?>
         </div>
     
     </div>