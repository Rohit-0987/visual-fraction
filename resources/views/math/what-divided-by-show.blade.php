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
    <div class="container w-full mt-md-10 mt-3">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <h1 class="col-12 my-4 h2">What divided by {{$num1}} equals {{$num2}}?</h1>
                    <h4 class="col-12 my-4" style="color: #0a4b78;  ">
                        Are you looking to solve the problem of what number divided by {{$num1}} equals {{$num2}}? In this quick equation lesson, we'll show you how to find the missing number and work out any simple division equations all by yourself!</h4>
                        <p>So what we have here is a very basic equation. Let's write it out so we can see exactly what we're trying to solve here:</p>
                </div>
                <div class="row  fs-3 fw-bold">
                    <div class="col-12">
                        X/{{$num1}} = {{$num2}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="mt-4">In this equation we're basically trying to solve for X. By that, I simply mean we need to figure out what number X could possibly be. The solution to this is very, very simple.</p>
                        <p>If we rearrange the formula above and move X over to the right hand side, and {{$num1}} over to the left, this is what we are left with:</p>
                    </div>
                </div>
                <div class="row  fs-3 fw-bold">
                    <div class="col-12">
                        {{$num2}} X {{$num1}} =X
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="mt-2">When the formula is rearranged, we change the division to a multiplication. So the answer to X is:</p>
                    </div>
                </div>
                <div class="row  fs-3 fw-bold">
                    <div class="col-12 mt-4">
                        {{$num2}} X {{$num1}} ={{$num1*$num2}}
                    </div>
                    <div class="col-12 mt-4">
                        X ={{$num1*$num2}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="mt-4">I honestly wish I had more to say here about solving this formula but this is absolutely fundamental basic equation math. To find out what divided by {{$num1}} equals {{$num2}} you just just have to multiply the two known numbers together!</p>
                        <p>To prove this, let's fill in the missing number from the first formula right at the top of this page:</p>
                    </div>
                </div>
                <div class="row  fs-3 fw-bold">
                    <div class="col-12">
                        {{$num1*$num2}} / {{$num1}} ={{($num1*$num2)/$num1}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="mt-4">Give this a go for yourself and try to calculate a couple of these yourself without using our calculator. Grab a pencil and a piece of paper and pick a couple of numbers. If you know your times tables well enough, I'm sure you'll have no trouble whatsoever with these!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-12">
                        <form class="form-bg" action="{{ url('/what-divided-by') }}" method="post">
                            @csrf
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <span class="py-3 text-center">What divided by </span>
                                    <input class="effect-2" name="num1" id="num1" type="number" placeholder="">
                                </div>
                                <div class="col-12 text-center">
                                    <span class="py-3 text-center">Equals </span>
                                    <input class="effect-2 mx-0" name="num2" id="num2" type="number" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 m-auto mt-2">
                                    <button type="submit" class="btn btn-color" style="width: 100%;">Calculate </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                @include('math.right-section-math')
            </div>
        </div>
    </div>

    @include('math.math-footer')
</body>
<script>
    function calculate() {
        var num1 = {{ $num1 }};
        var num2 = {{ $num2 }};
        var result = num1 / num2;
        let decimal = result % 1;
        let len_decimal = decimal.toString();
        let len = len_decimal.length;
        if(len>4){
            document.getElementById('res').textContent = result.toFixed(4);
            document.getElementById('res1').textContent = result.toFixed(4);
            document.getElementById('res2').textContent = result.toFixed(4);
            document.getElementById('res3').textContent = Math.round(num1/result);
        }
        else{
            document.getElementById('res').textContent = result;
            document.getElementById('res1').textContent = result;
            document.getElementById('res2').textContent = result;
            document.getElementById('res3').textContent = num1/result;
        }
    }
</script>
@include('math.math-scripts')

</html>
