@extends('layouts.master')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')



<div id='mainwrapper' class="container">

    <div class="row">


        <div>

            <div class="row info-card">

                <div class="col-lg-6 col-sm-6">
                    <h2 class='content-header text-center'>Who We Are</h2>
                    <p id="test">
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <h2 class='content-header text-center'>Practice Hours</h2>
                    <div id='hours'>
                    <strong>
                        <p><i class="icon-time"></i> Monday to Friday - 8:00 until 5pm</p>
                        <p><i class="icon-medkit"></i> Saturday - 8:00 until 1pm</p>
                        <br />
                        <p><i class="icon-phone"></i> Emergencies: 016 982 1401</p>
                    </strong>
                    </div>

                </div>

<!--                <div class="col-lg-4 col-sm-6">
                    <div id='mask'>

                        <img src="{{asset('img/ladydog.png')}}" height=450px" class="animated fadeInLeftBig"></p>
                    </div>
                </div>-->
            </div>
            
                
           
            <div class='row info-card'>
                <h2 class='content-header text-center'>Our Team</h2> 
               <div class="col-md-6">
                        <img src="https://ununsplash.imgix.net/photo-1417024321782-1375735f8987?q=75&fm=jpg&s=7af3f809a9c1b90b7fcbd71655b661bc"
                        class="img-quadrata center-block" >
                        <h3 class="text-center" >Christine Janse Van Rensburg
                        <br/>
                        <small>Veterinary Surgeon</small></h3>
                    </div>
                    <div class="col-md-6">
                        <img src="https://unsplash.imgix.net/reserve/fqUehZ3ZRru2Kh11qDBT_IMG_0042.jpg?q=75&fm=jpg&s=e96c5bfe57acbd6cdfdbe7d84f37656d"
                        class="center-block img-quadrata" >
                        <h3 class="text-center" >Mienkie Van Der Westhuizen
                        <br/>
                        <small>Veterinary Surgeon</small></h3>
                    </div>
<!--                    <div class="col-md-4">
                        <img src="https://unsplash.imgix.net/photo-1422222948315-28aadb7a2cb8?q=75&fm=jpg&s=cfeadbd7a991e58b553bee29a7eeca55"
                        class="center-block img-quadrata">
                        <h3 class="text-center">Samantha Reds
                        <br/>
                        <small> Content manager</small></h3>
                    </div>-->
            </div>
            
            <div class="row info-card">
                
                <h2 class='content-header text-center'>Practice Location</h2>
                <div class="span8">
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14253.975690464054!2d27.82211!3d-26.72861!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x578c1cafd146cbfd!2sVaal+Animal+Clinic!5e0!3m2!1sen!2sza!4v1490978241628"></iframe>
                </div>
                <br/>

               
            </div>


        </div>


    </div>
</div>







@endsection

