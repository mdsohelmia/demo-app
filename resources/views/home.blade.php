@extends('master')
@section('main')
    <div class="hero-wrap img" style="background-image: url('{{asset('images/bg_1.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-10 d-flex align-items-center ftco-animate">
                    <div class="text text-center pt-5 mt-md-5">
                        <p class="mb-4">Find Job, Employment, and Career Opportunities</p>
                        <h1 class="mb-5">The Eassiest Way to Get Your New Job</h1>
                        <div class="ftco-counter ftco-no-pt ftco-no-pb">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18">
                                        <div class="text d-flex">
                                            <div class="icon mr-2">
                                                <span class="flaticon-worldwide"></span>
                                            </div>
                                            <div class="desc text-left">
                                                <strong class="number" data-number="46">0</strong>
                                                <span>Countries</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                        <div class="text d-flex">
                                            <div class="icon mr-2">
                                                <span class="flaticon-visitor"></span>
                                            </div>
                                            <div class="desc text-left">
                                                <strong class="number" data-number="450">0</strong>
                                                <span>Companies</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                        <div class="text d-flex">
                                            <div class="icon mr-2">
                                                <span class="flaticon-resume"></span>
                                            </div>
                                            <div class="desc text-left">
                                                <strong class="number" data-number="80000">0</strong>
                                                <span>Active Employees</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ftco-search my-md-5">
                            <div class="row">
                                <div class="col-md-12 nav-link-wrap">
                                    <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                         aria-orientation="vertical">
                                        <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                           href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find
                                            a Job</a>
                                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                           role="tab" aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a>
                                    </div>
                                </div>
                                <div class="col-md-12 tab-wrap">
                                    <div class="tab-content p-4" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                             aria-labelledby="v-pills-nextgen-tab">
                                            <form action="#" class="search-job">
                                                <div class="row no-gutters">
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="icon"><span class="icon-briefcase"></span></div>
                                                                <input type="text" class="form-control"
                                                                       placeholder="eg. Garphic. Web Developer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Category</option>
                                                                        <option value="">Full Time</option>
                                                                        <option value="">Part Time</option>
                                                                        <option value="">Freelance</option>
                                                                        <option value="">Internship</option>
                                                                        <option value="">Temporary</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="icon"><span class="icon-map-marker"></span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Location">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <button type="submit" class="form-control btn btn-primary">
                                                                    Search
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                             aria-labelledby="v-pills-performance-tab">
                                            <form action="#" class="search-job">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="icon"><span class="icon-user"></span></div>
                                                                <input type="text" class="form-control"
                                                                       placeholder="eg. Adam Scott">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Category</option>
                                                                        <option value="">Full Time</option>
                                                                        <option value="">Part Time</option>
                                                                        <option value="">Freelance</option>
                                                                        <option value="">Internship</option>
                                                                        <option value="">Temporary</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="icon"><span class="icon-map-marker"></span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Location">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <button type="submit" class="form-control btn btn-primary">
                                                                    Search
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="category-wrap">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <div class="top-category text-center no-border-left">
                                    <h3><a href="#">Website &amp; Software</a></h3>
                                    <span class="icon flaticon-contact"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="top-category text-center active">
                                    <h3><a href="#">Education &amp; Training</a></h3>
                                    <span class="icon flaticon-mortarboard"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="top-category text-center">
                                    <h3><a href="#">Graphic &amp; UI/UX Design</a></h3>
                                    <span class="icon flaticon-idea"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="top-category text-center">
                                    <h3><a href="#">Accounting &amp; Finance</a></h3>
                                    <span class="icon flaticon-accounting"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="top-category text-center">
                                    <h3><a href="#">Restaurant &amp; Food</a></h3>
                                    <span class="icon flaticon-dish"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="top-category text-center">
                                    <h3><a href="#">Health &amp; Hospital</a></h3>
                                    <span class="icon flaticon-stethoscope"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Job Categories</span>
                    <h2 class="mb-0">Top Categories</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <ul class="category text-center">
                        <li><a href="#">Web Development <br><span class="number">354</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Graphic Designer <br><span class="number">143</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Multimedia <br><span class="number">100</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Advertising <br><span class="number">90</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 ftco-animate">
                    <ul class="category text-center">
                        <li><a href="#">Education &amp; Training <br><span class="number">100</span>
                                <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">English <br><span class="number">200</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Social Media <br><span class="number">300</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Writing <br><span class="number">150</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 ftco-animate">
                    <ul class="category text-center">
                        <li><a href="#">PHP Programming <br><span class="number">400</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Project Management <br><span class="number">100</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Finance Management <br><span class="number">222</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Office &amp; Admin <br><span class="number">123</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 ftco-animate">
                    <ul class="category text-center">
                        <li><a href="#">Web Designer <br><span class="number">324</span> <span>Open position</span></span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Customer Service <br><span class="number">564</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Marketing &amp; Sales <br><span class="number">234</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Software Development <br><span class="number">425</span>
                                <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-resume"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Search Millions of Jobs</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-team"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Easy To Manage Jobs</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-career"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Top Careers</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-employees"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Search Expert Candidates</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pr-lg-5">
                    <div class="row justify-content-center pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Recently Added Jobs</span>
                            <h2 class="mb-4">Featured Jobs Posts For This Week</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge">Partime</span>
                                        <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a>
                                        </div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>
                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                    <div>
                                        <a href="#"
                                           class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge">Fulltime</span>
                                        <h2 class="mr-3 text-black"><a href="#">Full Stack Developer</a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a>
                                        </div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>
                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                    <div>
                                        <a href="#"
                                           class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge">Freelance</span>
                                        <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a>
                                        </div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>
                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                    <div>
                                        <a href="#"
                                           class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge">Partime</span>
                                        <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a>
                                        </div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>
                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                    <div>
                                        <a href="#"
                                           class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge">Temporary</span>
                                        <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a>
                                        </div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>
                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                    <div>
                                        <a href="#"
                                           class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge">Fulltime</span>
                                        <h2 class="mr-3 text-black"><a href="#">Full Stack Developer</a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a>
                                        </div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>
                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                    <div>
                                        <a href="#"
                                           class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge">Freelance</span>
                                        <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a>
                                        </div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>
                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                    <div>
                                        <a href="#"
                                           class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge">Internship</span>
                                        <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a>
                                        </div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>
                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                    <div>
                                        <a href="#"
                                           class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge">Temporary</span>
                                        <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a>
                                        </div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>
                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                    <div>
                                        <a href="#"
                                           class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 sidebar">
                    <div class="row justify-content-center pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">Top Recruitments</h2>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="">
                            <a href="#" class="company-wrap"><img src="images/company-1.jpg" class="img-fluid"
                                                                  alt="Colorlib Free Template"></a>
                            <div class="text p-3">
                                <h3><a href="#">Company Company</a></h3>
                                <p><span class="number">500</span> <span>Open position</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="">
                            <a href="#" class="company-wrap"><img src="images/company-2.jpg" class="img-fluid"
                                                                  alt="Colorlib Free Template"></a>
                            <div class="text p-3">
                                <h3><a href="#">Facebook Company</a></h3>
                                <p><span class="number">700</span> <span>Open position</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="">
                            <a href="#" class="company-wrap"><img src="images/company-3.jpg" class="img-fluid"
                                                                  alt="Colorlib Free Template"></a>
                            <div class="text p-3">
                                <h3><a href="#">IT Programming INC</a></h3>
                                <p><span class="number">700</span> <span>Open position</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="">
                            <a href="#" class="company-wrap"><img src="images/company-4.jpg" class="img-fluid"
                                                                  alt="Colorlib Free Template"></a>
                            <div class="text p-3">
                                <h3><a href="#">IT Programming INC</a></h3>
                                <p><span class="number">700</span> <span>Open position</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-candidates bg-primary">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Candidates</span>
                    <h2 class="mb-4">Latest Candidates</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-candidates owl-carousel">
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                                <h2>Danica Lewis</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                <h2>Nicole Simon</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_3.jpg);"></div>
                                <h2>Cloe Meyer</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_4.jpg);"></div>
                                <h2>Rachel Clinton</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url('{{asset('images/person_5.jpg')}}');"></div>
                                <h2>Dave Buff</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_6.jpg);"></div>
                                <h2>Dave Buff</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Our Blog</span>
                    <h2><span>Recent</span> Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">August 28, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                    texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">August 28, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                    texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">August 28, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                    texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">August 28, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                    texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
