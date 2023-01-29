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
                    <h1 class="col-12 my-4 h2">{{$num1}} divided by what equals {{$num2}}? </h1>
                    <h4 class="col-12 my-4" style="color: #0a4b78;  ">
                        {{$num1}} divided by what equals {{$num2}}? If you're looking to solve this word problem then you're in the right place. If you have the number {{$num1}} and you want to divide it by something to get the answer {{$num2}} then this quick equation lesson will show you exactly how to find that missing number "something".</h4>
                        <p>First of all, we can write this problem out and use the letter X to be the missing number we want to try and find:</p>
                </div>
                {{-- <div class="row">
                    <div class="col-12">
                        <p>First up, let's clarify what we mean by "{{ $num1 }} is divisible by
                            {{ $num2 }}". What we want to check is whether {{ $num1 }} can be divided by
                            {{ $num2 }} without any remainder (i.e the answer is a whole number).</p>

                    </div>
                </div> --}}
                <div class="row text-center fs-3 fw-bold">
                    <div class="col-md-2 col-3">
                        <div class="border-3 border-bottom border-dark">{{ $num1 }}</div>
                        <div class="">X</div>
                    </div>
                    <div class="col-1 my-auto">
                        =
                    </div>
                    <div class="col-md-2 my-auto col-3">
                        {{$num2}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>The first step is to multiply both sides of this equation by the missing number X. We don't know what X is yet, so we do this by adding X in brackets:</p>
                    </div>
                </div>
                <div class="row text-center fs-3 fw-bold">
                    <div class="col-md-2 col-3">
                        <div class="border-3 border-bottom border-dark">{{ $num1 }}(X)</div>
                        <div class="">X</div>
                    </div>
                    <div class="col-1 my-auto">
                        =
                    </div>
                    <div class="col-md-2 my-auto col-3">
                        {{$num2}}(X)
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>If you're new to equations this might look a little confusing but all we are really saying is that {{$num1}} is the same as {{$num2}} times X.</p>
                        <p>To find X, we need to divide both sides by our final answer, {{$num1}}:</p>
                    </div>
                </div>
                <div class="row text-center fs-3 fw-bold">
                    <div class="col-md-2 col-3">
                        <div class="border-3 border-bottom border-dark">{{ $num1 }}</div>
                        <div class="">{{$num2}}</div>
                    </div>
                    <div class="col-1 my-auto">
                        =
                    </div>
                    <div class="col-md-2 my-auto col-3">
                        <div class="border-3 border-bottom border-dark">{{ $num2 }}(X)</div>
                        <div class="">{{$num2}}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>So, our final answer here to {{$num1}} divided by what equals {{$num2}} is:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1><span id="res"></span> = X</h1>
                        <p>In these answers we round them to a maximum of 4 decimal places because some calculations might have long decimal answers. If you want to check whether the answer is close, you can divide {{$num1}} by <span id="res1"></span>:</p>
                    </div>
                </div>
                <div class="row text-center fs-3 fw-bold">
                    <div class="col-md-2 col-3">
                        <div class="border-3 border-bottom border-dark">{{ $num1 }}</div>
                        <div class=""><span id="res2"></span></div>
                    </div>
                    <div class="col-1 my-auto">
                        =
                    </div>
                    <div class="col-md-2 my-auto col-3">
                        <div class="border-3 "><span id="res3"></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Hopefully now you know exactly how to work out math problems like these yourself in future. Could I have just told you to divide {{$num1}} by {{$num2}}? Yes, but aren't you glad you learned the process?</p>
                        <p>Give this a go for yourself and try to calculate a couple of these without using our calculator. Grab a pencil and a piece of paper and pick a couple of numbers.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-12">
                        <form class="form-bg" action="{{ url('/divided-by-what') }}" method="post">
                            @csrf
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <input class="effect-2" name="num1" id="num1" type="number" placeholder="">
                                </div>
                                <div class="col-12 text-center">
                                    <span class="py-3 text-center">divided by what equals </span>
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
