<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!--bu satır örnekten alındı ikonların gözükmesini sağlıyor ne olduğunu tam bilmiyorum-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

<style>
    a.nav-link {
        color: gray;
        font-size: 18px;
        padding: 0;
    }

    .avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 2px solid #e84118;
        padding: 2px;
        flex: none;
    }

    input:focus {
        outline: 0px !important;
        box-shadow: none !important;
    }

    .card-text {
        border: 2px solid #ddd;
        border-radius: 8px;
    }
</style>

<body>
    <div class="container">
        <div class="card mx-auto">
            <div class="card-header bg-transparent">
                <div class="navbar navbar-expand p-0">
                    <ul class="navbar-nav me-auto align-items-center">
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <div class="position-relative"
                                    style="width:50px; height: 50px; border-radius: 50%; border: 2px solid #e84118; padding: 2px">  <!--çevrimiçi ikonu-->
                                    <img src="https://icon-library.com/images/technician-icon/technician-icon-13.jpg" 
                                        class="img-fluid rounded-circle" alt=""> <!--tamirci ikonu-->
                                        
                                    <span
                                        class="position-absolute bottom-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">Nelh</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <i class="fas fa-times"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body p-4" style="height: 660px; overflow: auto;">

                <div class="d-flex align-items-baseline mb-4">
                    <div class="position-relative avatar">
                        <img src="https://nextbootstrap.netlify.app/assets/images/profiles/1.jpg"
                            class="img-fluid rounded-circle" alt="">
                        <span
                            class="position-absolute bottom-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </div>
                    <div class="pe-2">
                        <div>
                            <div class="card card-text d-inline-block p-2 px-3 m-1">Hi helh, are you available to chat?  <!--örnek text-->
                            </div>
                        </div>
                        <div>
                            <div class="small">01:10PM</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-baseline text-end justify-content-end mb-4">
                    <div class="pe-2">
                        <div>
                            <div class="card card-text d-inline-block p-2 px-3 m-1">Sure</div>
                        </div>
                        <div>
                            <div class="card card-text d-inline-block p-2 px-3 m-1">Let me know when you're available?
                            </div>
                        </div>
                        <div>
                            <div class="small">01:13PM</div>
                        </div>
                    </div>
                    <div class="position-relative avatar">
                        <img src="https://nextbootstrap.netlify.app/assets/images/profiles/2.jpg"
                            class="img-fluid rounded-circle" alt="">
                        <span
                            class="position-absolute bottom-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </div>
                </div>

                <div class="d-flex align-items-baseline mb-4">
                    <div class="position-relative avatar">
                        <img src="https://nextbootstrap.netlify.app/assets/images/profiles/1.jpg"
                            class="img-fluid rounded-circle" alt="">
                        <span
                            class="position-absolute bottom-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </div>
                    <div class="pe-2">
                        <div>
                            <div class="card card-text d-inline-block p-2 px-3 m-1">3:00pm??</div>
                        </div>
                        <div>
                            <div class="small">Edited - 01:13PM</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-baseline text-end justify-content-end mb-4">
                    <div class="pe-2">
                        <div>
                            <div class="card card-text d-inline-block p-2 px-3 m-1">Cool</div>
                        </div>
                       
                          
                    </div>
                    <div class="position-relative avatar">
                        <img src="https://nextbootstrap.netlify.app/assets/images/profiles/2.jpg"
                            class="img-fluid rounded-circle" alt="">
                        <span
                            class="position-absolute bottom-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </div>
                </div>

            </div>
            <div class="card-footer bg-white position-absolute w-100 bottom-0 m-0 p-1">
                <div class="input-group">
                    <div class="input-group-text bg-transparent border-0">
                       
                    </div>
                    <input type="text" class="form-control border-0" placeholder="Write a message...">
                    <div class="input-group-text bg-transparent border-0">
                       
                    </div>
                    <div class="input-group-text bg-transparent border-0">
                        <button class="btn btn-light text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                              </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>