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
                    <p class="col-12 my-4 h2">What is {{ $num1 }} to the {{ $num2 }}th Power? </p>
                    <h4 class="col-12 my-4" style="color: #0a4b78;  ">
                        So you want to know what {{ $num1 }} to the {{ $num2 }}th power is do you? In
                        this article we'll explain exactly
                        how to perform the mathematical operation called "the exponentiation of {{ $num1 }} to
                        the power of {{ $num2 }}".
                        That might sound fancy, but we'll explain this with no jargon! Let's do it.</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>What is an Exponentiation?</h2>
                        <p>Let's get our terms nailed down first and then we can see how to work out what 81 to the 64th
                            power is.</p>
                        <p>When we talk about exponentiation all we really mean is that we are multiplying a number
                            which we call the base (in this case {{ $num1 }}) by itself a certain number of
                            times. The exponent
                            is the number of times to multiply {{ $num1 }} by itself, which in this case is
                            {{ $num2 }} times.</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <h2>{{ $num1 }} to the Power of {{ $num2 }}</h2>
                        <p>There are a number of ways this can be expressed and the most common ways you'll see
                            {{ $num1 }} to the {{ $num2 }}th shown are:</p>
                        <ul>
                            <li>{{$num1}} <sup>{{$num1}}</sup> </li>
                            <li>{{$num1}}^{{$num2}}</li>
                        </ul>
                        <p>So basically, you'll either see the exponent using superscript (to make it smaller and
                            slightly above the base number) or you'll use the caret symbol (^) to signify the exponent.
                            The caret is useful in situations where you might not want or need to use superscript.</p>
                        <p>So we mentioned that exponentation means multiplying the base number by itself for the
                            exponent number of times. Let's look at that a little more visually:</p>
                        <p>{{ $num1 }} to the {{ $num2 }}th Power = {{ $num1 }} x ... x
                            {{ $num1 }} ({{ $num2 }} times)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>So What is the Answer?</h2>
                        <p>Now that we've explained the theory behind this, let's crunch the numbers and figure out what
                            {{ $num1 }} to the {{ $num2 }}th power is:</p>
                        <h2>{{$num1}} to the power of {{$num2}} = {{$num1}}<sup>{{$num2}}</sup> = <span id="result"> </span></h2>
                        <p>Why do we use exponentiations like {{$num1}} <sup>{{$num2}}</sup>  anyway? Well, it makes it much easier for us to write multiplications and conduct mathematical operations with both large and small numbers when you are working with numbers with a lot of trailing zeroes or a lot of decimal places.</p>
                        <p>Hopefully this article has helped you to understand how and why we use exponentiation and given you the answer you were originally looking for. Now that you know what {{$num1}} to the {{$num2}}rd power is you can continue on your merry way.</p>
                        <p>Feel free to share this article with a friend if you think it will help them, or continue on down to find some more examples.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <form class="form-bg" action="{{ url('/exponentiation')}}" method="post">
                            @csrf
                            <div class="h4 text-light">Calculate Exponentiation</div>
                            <hr>
                            <div class="row ">
                                <span class="py-3">Enter a number </span>
                                    <div class="col-12 mb-2 mb-md-0  col-sm-4 col-md-4">
                                        <input class="effect-2" name="num1" id="num1" oninput="calculate()" placeholder="Base number" type="number" placeholder="">
                                    </div>
                                    <div class="col-12 mb-2 mb-md-0 col-sm-4 col-md-4">
                                        <input class="effect-2 mx-0" name="num2" id="num2" oninput="calculate()" placeholder="Exponent/power" type="number" placeholder="">
                                    </div>
                                    
                            </div>
                            <div class="row">
                                <div class="col-8 mt-2">
                                    <button type="submit"  class="btn btn-color"
                                        style="width: 100%;">Calculate </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <p class="h2">Random List of Exponentiation Examples</p>
                    </div>
                    <div class="col-12">
                        <p>If you made it this far you must REALLY like exponentiation! Here are some random calculations for you:</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    @for($num1 = 2; $num1 <= 99; $num1++)
                        @for($num2 = 3; $num2 <= 100; $num2++)
                            @if($num1 >= $num2)
                                @continue
                            @endif
                                <a href="exponentiation/what-is-{{$num1 =random_int(1,100)}}-to-the-{{$num2 =random_int(1,100)}}-th-power" class="col-md-4 col-sm-6 col-12 text-center my-2  "> <p>What is {{$num1}} to the {{$num2}}th power?</p></a>
                                    
                        @endfor
                    @endfor
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
        var num1 = {{$num1}};
        var num2 = {{$num2}};
        var result = Math.pow(num1,num2);
        document.getElementById('result').textContent = result;
    }
</script>
@include('math.math-scripts')

</html>
