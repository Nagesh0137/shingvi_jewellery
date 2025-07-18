
  <style>

    
    .notification-card {
        width: 45rem;
      /*max-width: 390px;*/
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
       padding: 10px;
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
      <div class="col-md-12 d-flex justify-content-center mb-4">
        <div class="card notification-card shadow-sm">
          <div class="icon-circle success-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
              <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
            </svg>
          </div>
          <h2 class="notification-title">Success!</h2>
          <p class="notification-text">
            Your payment was successful.<br>
            A receipt for this purchase has been<br>
            sent to your email.
          </p>
          <a class="btn btn-success-custom text-white rounded-pill" href="<?=base_url()?>">KEEP SHOPPING</a>
        </div>
      </div>
    </div>
  </div>


