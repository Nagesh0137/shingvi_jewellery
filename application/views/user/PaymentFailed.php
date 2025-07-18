
  <style>

    
    .notification-card {
      width: 45rem;
      padding: 2rem;
      text-align: center;
    }
    
    .icon-circle {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
    }
    
    .success-icon {
      background-color: #20c997;
      color: white;
    }
    
    .error-icon {
      background-color: #f87171;
      color: white;
    }
    
    .notification-title {
      color: #5470b0;
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }
    
    .notification-text {
      color: #9ca3af;
      margin-bottom: 1.5rem;
    }
    
    .btn-success-custom {
      background-color: #20c997;
      border: none;
      padding: 0.5rem 2rem;
    }
    
    .btn-error-custom {
      background-color: #f87171;
      border: none;
      padding: 10px;
    }
    
    .error-title {
      color: #6366f1;
    }
  </style>

  <div class="container">
    <div class="row justify-content-center">
      <!-- Success Card -->

      
      <!-- Error Card -->
      <div class="col-md-12 d-flex justify-content-center  mb-4">
        <div class="card notification-card shadow-sm">
          <div class="icon-circle error-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
            </svg>
          </div>
          <h2 class="notification-title error-title">Oh no!</h2>
          <p class="notification-text">
            An error occurred during your<br>
            payment. Please try again.
          </p>
          <a class="btn btn-error-custom text-white rounded-pill" href="<?=base_url()?>user/createOrder/<?=$bill_id?>">Try again</a>
        </div>
      </div>
    </div>
  </div>


