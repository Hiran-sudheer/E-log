<?php
 use Carbon\Carbon;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
       
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="themeAsset/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div id="app">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Time Now : @{{ date_time }}  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#footer">About</a></li>
                       
                    </ul>
                    <form class="d-flex">
                        {{-- <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                           
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button> --}}
                    </form>
                </div>
            </div>
        </nav>
        <!-- Product section-->
        <section id="!" class="py-2">
            
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-8 ">
                        <div class="row ">
                            <table class="table table-borderless">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Log In</th>
                                    <th scope="col">-------></th>
                                    <th scope="col">Log Out</th>
                                    <th scope="col">Total Hours</th>
                                  </tr>
                                </thead>
                                <tbody>


                                   <tr v-for="days in week_data">
                                    
                                    <th scope="row">@{{days.DAY}}</th>
                                    <td>@{{ (days.login_time != null)?new Date(days.login_time).toLocaleTimeString():'--' }}</td>
                                    <td>-------></td>
                                    <td>@{{ (days.logout_time != null)?new Date(days.logout_time).toLocaleTimeString():'--' }}</td>
                                    <td>@{{ days.total_hours}}</td>
                                    {{-- <td>@{{ days }}</td> --}}

                                  </tr>




                                  <!-- <tr>
                                    <th scope="row">Monday</th>
                                    <td>9:00 AM</td>
                                    <td></td>
                                    <td>6:00 PM</td>
                                   
                                  </tr>
                                  <tr>
                                    <th scope="row">Tuesday</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Wednesday</th>
                                    <td ></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Thursday</th>
                                    <td ></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Friday</th>
                                    <td ></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Saturday</th>
                                    <td ></td>
                                    <td></td>
                                    <td></td>
                                  </tr> -->
                                 
                                </tbody> 

                                <tbody>
                                    <?php
                                    // $sd = $StartDate;
                                    // $ed = $EndDate;
                                    // $id = '';
                                      
                                    // while($sd<=$ed) 
                                    // { 
                                    //   $STime = '';
                                    //   $ETime = '';
                                    //   if(isset($LoginTimes[$sd])) {
                                    //      $STime = $LoginTimes[$sd]->login_time;
                                    //       $STime = Carbon::createFromFormat('H:i:s', $STime);
                                    //       $STime = $STime->format('h:i A');
                                    //       $ETime = $LoginTimes[$sd]->logout_time;
                                    //       if($ETime!='') {
                                    //           $ETime = Carbon::createFromFormat('H:i:s', $ETime);
                                    //           $ETime = $ETime->format('h:i A');
                                    //       }
                                    //       $id = $ETime==''? $LoginTimes[$sd]->id : '';
                                    //  }
                                    //   $date = Carbon::createFromFormat('Y-m-d', $sd);
                                      ?>
                                      {{-- <tr>
                                          <th scope="row"><?= $date->format('D M d, Y') ?></th>
                                          <td><?= $STime; ?></td>
                                          <td>-------></td>
                                          <td><?= $ETime; ?></td>
                                      </tr> --}}
                                      <?php 
                                    //    $date = Carbon::createFromFormat('Y-m-d', $sd);
                                    //    $sd = $date->addDays(1)->format('Y-m-d');
                                    // }
                                    ?>
                                  </tbody>
                              </table>
                              
                        </div>
                     
                       
                         
                   
                        {{-- <div class=" mb-1"></div>
                       
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                           
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                            </button>
                        </div> --}}
                    </div>
                   
                    <div class="col-md-4"><img class="card-img-top mb-5 mb-md-0" src="<?=$user->profile_image ?>" alt="..." />
                    <h2 class="display-6 fw-bolder"><?= $user->name ?></h2>
                        <div class="fs-5 mb-5">
                            <h3><?=$user->email ?></h3>
                            <span class="text-decoration-line-through"></span>
                            {{-- <span>@{{ log_data.id }}</span> --}}
                        </div>
                    </div>
                    
                </div>
                <form action="{{ url('login') }}" method="post">
                <div class="col-md-7 d-flex justify-content-center">
                    <button class="btn btn-outline-dark px-3 ms-5 " type="button" @click="loggg" :disabled="login_logout_is_enabled">
                        @{{login_logout}}
                    </button>
                   
                </div>
                </form>
            </div>
            
        </section>
        <!-- Related items section-->
        {{-- <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </section> --}}
        <!-- Footer-->
        <footer id="footer" class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/themeAsset/js/scripts.js"></script>
       
   
    </body>
</html>
<script>

   var app = new Vue({
  el: '#app',
  data: {
    message: "Sample Message ",
	date_time:'',
    hours:'',
    login_logout:'..',
    test : '2022-12-27 10:01:01',
    user_id:'',
    isDisabled: null,
    login_logout_is_enabled:false,
    log_data:'',
    week_data:'',
    log_data2:'',
  

  },
  methods: {
    loggg : function(){

        console.log(  this.login_logout + ' initiated ');


        let url= 'http://localhost/api/loggg';
                  axios.post(url, {
                    'user_id':this.user_id,
                    'login_logout_f':this.login_logout,
                    'log_id':this.log_data.id,
                    'login_time':this.log_data2.login_time,
                  })
                  .then(function (response) {
                    console.log(response.data);
                    // this.log_data2 = response.data;
                    this.log_data = response.data ;
                    // this.user_data = response.data;
                   // console.log(this.user_data);
                  }.bind(this)) 
                  .catch(function (error) {
                    console.log(error);
                  });

                //   if(this.hours<=12){
                //     this.isDisabled=true;
                //   } 
                //   if(this.hours>12){
                //     this.isDisabled=true;
                //     } 
                
                 
    }
	// if(this.hours>12) {
    //     this.isDisabled=false;
    // }
  },


mounted() {
    this.user_id = '<?= $user->id ?>' ; 
    console.log(this.user_id)
    this.log_data = <?= json_encode(isset($log_data[0])?$log_data[0]:'') ?> ;
    this.week_data = <?= json_encode(isset($week_data)?$week_data:'') ?> ;
   if(this.log_data != ''){ 
        this.log_data2 = this.log_data.payload ;
        this.log_data2 = JSON.parse(this.log_data2)
    }
  setInterval(function(){
// this.date_time =new Date(this.test).toLocaleTimeString();
  this.date_time =new Date().toLocaleTimeString();
    
   var now = new Date();
//    var now = new Date(this.test);
//    this.date_time =now.toLocaleTimeString();
 
    this.hours = now.getHours();

                if(this.hours >= 12){

                    this.login_logout = "Logout";
                     if(this.log_data != ''){
                         if(this.log_data2.logout_time === ''){
                             this.login_logout_is_enabled = false;
                        }else{
                            this.login_logout_is_enabled = true;
                        }
                     }    
                }else{
                     this.login_logout = "LogIn";
                    if(this.log_data != ''){
                        if(this.log_data2.login_time === null){
                            this.login_logout_is_enabled = false;
                        }else{
                            this.login_logout_is_enabled = true;
                        }
                    }
                }
  }.bind(this),1000);
 
  }
});

  </script>