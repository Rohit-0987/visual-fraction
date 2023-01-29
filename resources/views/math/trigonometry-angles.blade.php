<!doctype html>
<html>

<head>
    @include('links')
    <link href="{{ URL::asset('assets/css/percentage-show.css') }}" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
            color: #b26200;
        }
    </style>
</head>

<body onload="calculate()" style="font-size: 1.2rem">
    @include('navbar')
    <div class="container w-full mt-md-{{ $num1 }} mt-3">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <h1 class="col-12">What is the Supplementary Angle of {{$num1}} Degrees?</h1>
                    <p class="col-12 fs-8" style="color: #0a4b78; font-size:1.{{ $num1 }}rem; ">
                        A supplementary angle is the angle which produces a straight line of 180° when added to the given angle.</p>
                    <p>In this example, we are trying to calculate the supplementary angle for the given angle of {{$num1}} degrees.</p>    
                    <p>This is a very simple problem to solve, and we can work out the supplement of {{$num1}} degrees using some basic algebra.</p>
                    <p>To start with, let's set up the problem we are trying to solve as an equation. We know that the supplementary angle added to the given angle of {{$num1}}° equals 180 degrees.</p>
                </div>
                <div class="col-4 p-1" style="background-color:rgb(236, 236, 236); font-weight:600">
                    <p class="px-4">S + {{$num1}} = 180</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>What we need to do is solve this equation so that we can find <span class="col-4 p-1" style="background-color:rgb(236, 236, 236); font-weight:600">S</span>, the supplementary angle.</p>
                        <p>Let's rearrange the equation using algebra to work out the supplement of {{$num1}}°:</p>
                    </div>
                    <div class="col-4 p-1" style="background-color:rgb(236, 236, 236); font-weight:600">
                        <p class="px-4">S = 180 - {{$num1}}</p>
                    </div>
                    <p>You should now be able to see the answer to this problem forming, as we just need to deduct {{$num1}} from 180 to get our supplementary angle:</p>
                    <div class="col-4 p-1" style="background-color:rgb(236, 236, 236); font-weight:600">
                        <p class="px-4">180 - {{$num1}} = {{180 - $num1}}</p>
                    </div>
                    <div class="mt-4">
                        <h3>This means that the supplementary angle of {{$num1}} degrees is {{180 - $num1}} degrees.</h3>
                        <p>Give this a try for yourself and try to work out the supplementary angles of any given angle which is less than 180°.</p>
                        <p>If you'd like some ideas of angles to calculate, take a look at the random list in the sidebar and try to solve them without checking the answer first.</p>
                        <p>We cover the criteria for supplementary angles, how to find them (which is an expansion of the above calculation), the properties of supplementary angles, the different types, and lots of examples to work through.</p>
                    </div>
                </div>
            
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="w-full py-2 rounded-4 right-section mb-4 px-2">
                    <h4>Random Supplementary Angle Calculations</h4>
                    @for($nume1 = 2; $nume1 <= 20; $nume1++)
                        <div class="m-0"><a href="what-is-the-trigonometry-angle-of-{{$num1=random_int(1,100)}}"><p> Supplementary Angle of {{$num1}}</p></a>
                        </div>
                    @endfor
                </div>
                @include('math.right-section-math')
            </div>
        </div>
    </div>

    @include('math.math-footer')
</body>
<script>
    function calculate() {
    }
</script>
@include('math.math-scripts')

</html>
