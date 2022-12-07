@extends('layout')
@section('home')

<style>
 .home{
    height: 100vh;
    /*width: 100%;*/
    background-image: url(../images/background.jpg);
    background-size: cover; /*الصورة علي قد مساحة الصفحة*/
    /*background-repeat: no-repeat;*/
    position: relative;
}
.home .btn{
        margin: auto;
        margin-bottom: 40px; 
}
</style>
		  <!-- *****************************************************************************
********************************* page 1 **********************************************
************************************************************************************-->
            <div class="over">
                    <div class="home-content">
                            <h1 class="message">Best Care For Your  Health </h1>
                            <p class="description">
                               We Care For Your Health Every Moment And
                                Provide High Solutions.
                            </p>
                            <input  type="button" onclick="location.href='{{url('https://daralshefa.com/medical-advices/')}}'" class="btn button-start hover-opacity" value="Take care of yourself" style="background-color: #327616">
                            <input  type="button" onclick="location.href='{{route('vaccaine.add')}}'" class="btn button-start hover-opacity" value="Book your vaccination">
                            {{-- @auth
                            <input  type="button" onclick="location.href='{{route('register')}}'" class="btn button-start hover-opacity" value="Add New User" style="background-color: #327616">
                            @endauth --}}
                            
                    </div> <!--   ./home-content -->
            </div> <!--   ./over -->
       </div> <!--   ./home -->

@endsection
