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
                    <p class="col-12 h2">What is {{ $num1 }} mod {{ $num2 }}? </p>
                    <h4 class="col-12" style="color: #0a4b78;  ">
                        Do you need to know what {{ $num1 }} mod {{ $num2 }} means? Maybe you need to
                        calculate it? In this little guide we'll show you precisely how to calculate the mod of a
                        number. You might also see this referred to as modulo or modulus.</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>So what is a modulu or modulus? Put simply, modulo is the math operation of finding the
                            remainder when you divide two numbers together. If you are asking "what is
                            {{ $num1 }} mod {{ $num2 }}?" then
                            what you really need to know is "what is the remainder when I divide {{ $num1 }} by
                            {{ $num2 }}?".
                        </p>
                        <p>There are lots of reasons why you would want to use modulo, including checking if a number is
                            even or odd, counting something for a certain amount of times, and even a common clock in
                            your house will be using modulo to tell the time.
                        </p>
                        <p>Let's look at two methods for calculating {{ $num1 }} modulo {{ $num2 }}.
                            We'll call them the modulo method and the modulus method.</p>
                        <p>Note: the first number ({{ $num1 }}) is called the Dividend and the second number
                            ({{ $num2 }}) is called the Divisor. When you divide the Dividend by the Divisor
                            the answer you are left with is the Quotient. This Quotient has the whole number part
                            (called the Whole) and the decimal places part, which is called the Fractional.</p>
                    </div>
                </div>
                <div class="row">
                    <p class="h2 col-12 " style="color:black;  ">Modulo Method</p>
                    <p>First need to divide the Dividend by the Divisor:</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="col-12 fs-5 mt-3">
                        <div class="row text-center fs-3 fw-bold">
                            <div class="col-md-2 col-3">
                                <div class="border-3 border-bottom border-dark">{{ $num1 }}</div>
                                <div class="">{{ $num2 }}</div>
                            </div>
                            <div class="col-1 my-auto">
                                =
                            </div>
                            <div class="col-1 my-auto">
                                <div class=""><span id="res"></span></div>
                            </div>
                        </div>
                        </p>
                    </div>
                    <p>Next we take the Whole part of the Quotient (<span id="quotient1">a</span>) and multiply that by
                        the Divisor ({{ $num2 }}):</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1><span id="quotient" value=""></span> x {{ $num2 }} = <span
                                id="quotient-result"></span></h1>
                        <p>And finally, we take the answer in the second step and subtract it from the Dividend to get
                            the answer to {{ $num1 }} mod {{ $num2 }}:</p>
                        <h1>{{ $num1 }} - <span id="quotient-result2"></span> = <span
                                id="divisor-result"></span></h1>
                        <p>As you can see, the answer to {{ $num1 }} mod {{ $num2 }} is <span
                                id="divisor-result1"></span>.</p>
                    </div>
                </div>
                <div class="row">
                    <p class="col-12 h2">Modulus Method </p>
                    <p>The modulus method requires us to first find out what the highest common multiple of the Divisor
                        ({{$num2}}) is that is equal to or less than the Dividend ({{$num1}}).</p>
                    {{-- <p>We can see that multiples of {{$num2}} are @for($i=0;$i<=$num1;$i++) @if($i%$num2==0) {{$i}} @endif @endfor etc. The highest multiple that is less than or
                        equal to {{$num1}} is {{$i}}.</p> --}}
                    <p>So the final step in the modulus method here is to subtract the divisor highest multiple from the
                        Dividend and answer the question "what is {{$num1}} modulus {{$num2}}?":</p>
                    <h2>{{ $num1 }} - <span id="quotient-result3"></span> = <span id="divisor-result2"></span></h2>
                    <p>As we can see, this is the same answer as the modulo method and the answer is <span id="divisor-result3"></span>.</p>
                    <p>Hopefully you understood this brief but fascinating journey through the modulo and modulus method
                        calculations. If you're feeling fancy then grab a pen and paper and do a couple of these
                        yourself to see if you've actually learned anything.</p>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <form class="form-bg" action="{{ url('/modulo')}}" method="post">
                            @csrf
                            <div class="h4 text-light">Enter Modulo Problem </div>
                            <hr>
                            <div class="row">
                                <span class="py-3">Enter a number </span>
                                    <div class="col-4">
                                        <input class="effect-2" name="num1" id="num1" oninput="calculate()" type="number" placeholder="">
                                    </div>
                                    <div class="col-4 col-md-2 col-lg-2 "><h5>MOD</h5></div>
                                    <div class="col-4">
                                        <input class="effect-2 mx-0" name="num2" id="num2" oninput="calculate()" type="number" placeholder="">
                                    </div>
                                    
                            </div>
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <button type="submit"  class="btn btn-color"
                                        style="width: 100%;">Calculate </button>
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
        var count = 0;
        for (var num = 1; num <= {{ $num1 }}; num++) {
            if ({{ $num1 }} % num == 0) {
                count++;
            }
        }
        var res = {{ $num1 }} / {{ $num2 }}
        var result = res.toFixed(2)
        var getDecimalVal = result.toString().indexOf(".");
        var decimalPart = result.toString().substring(0, getDecimalVal);
        document.getElementById("res").textContent = res.toFixed(2);
        document.getElementById("quotient").textContent = decimalPart;
        document.getElementById("quotient1").textContent = decimalPart;
        document.getElementById("quotient-result").textContent = decimalPart * {{ $num2 }};
        document.getElementById("quotient-result2").textContent = decimalPart * {{ $num2 }};
        document.getElementById("quotient-result3").textContent = decimalPart * {{ $num2 }};
        document.getElementById("divisor-result").textContent = {{ $num1 }} - decimalPart *
            {{ $num2 }};
        document.getElementById("divisor-result1").textContent = {{ $num1 }} - decimalPart *
            {{ $num2 }};
        document.getElementById("divisor-result2").textContent = {{ $num1 }} - decimalPart *
            {{ $num2 }};
        document.getElementById("divisor-result3").textContent = {{ $num1 }} - decimalPart *
            {{ $num2 }};
    }
</script>
@include('math.math-scripts')

</html>
