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
                    <p class="col-12 h2">Square Root of {{ $num1 }} </p>
                    <p class="col-12 fs-8" style="color: #0a4b78; font-size:1.{{ $num1 }}rem; ">
                        In this article we're going to calculate the square root of {{ $num1 }} and explore what
                        the square root is and answer some of the common questions you might. We'll also look at the
                        different methods for calculating the square root of {{ $num1 }} (both with and without
                        a computer/calculator).</p>
                </div>
                <div class="row">
                    <p class="h2 col-12 " style="color:black;  ">Square Root of {{ $num1 }} Definition</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>In mathematical form we can show the square root of {{ $num1 }} using the radical
                            sign, like this: √{{ $num1 }}. This is usually referred to as the square root of
                            {{ $num1 }} in radical form.
                        </p>
                        <p>So what is the square root? In this case, the square root of {{ $num1 }} is the
                            quantity (which we will call q) that when multiplied by itself, will equal
                            {{ $num1 }}.</p>
                        <h1>√{{ $num1 }} = q × q = q<sup>2</sup></h1>
                    </div>
                </div>
                <div class="row">
                    <h1 class=" col-12 py-3 " style="color:black;  ">Is {{ $num1 }} a Perfect Square?</h1>
                </div>
                <div class="row py-3">
                    <div class="col-12">
                        <p>In math, we refer to {{ $num1 }} being a perfect square if the square root of
                            {{ $num1 }} is a whole number.</p>
                        <p>In this case, as we will see in the calculations below, we can see that {{ $num1 }}
                            is <span id="perfect-square" value="a"> </span>.</p>
                        <p>To find out more about perfect squares, you can read about them and look at a list of
                            {{ $num1 }}00 of them in our <a href=""> What is a Perfect Square?</a>
                            article.</p>
                    </div>
                </div>
                <div class="row">
                    <h1 class=" col-12 py-3 " style="color:black;  ">Is The Square Root of {{ $num1 }} Rational
                        or Irrational?</h1>
                </div>
                <div class="row py-3">
                    <div class="col-12">
                        <p>A common question is to ask whether the square root of {{ $num1 }} is rational or
                            irrational. Rational numbers can be written as a fraction and irrational numbers cannot.</p>
                        <p>A quick way to check this is to see if {{ $num1 }} is a perfect square. If it is,
                            then it is a rational number. If it's not a perfect square then it's an irrational number.
                        </p>
                        <p>We already know if {{ $num1 }} is a perfect square so we also can see that
                            √{{ $num1 }} is an irrational number.</p>
                    </div>
                </div>
                <div class="row">
                    <h1 class=" col-12 py-3 " style="color:black;  ">Can the Square Root of {{ $num1 }} Be
                        Simplified?</h1>
                </div>
                <div class="row py-3">
                    <div class="col-12">
                        <p id="simplified-para">{{$num1}} can be simplified only if you can make {{$num1}} inside the radical symbol smaller. This is a
                            process that is called simplifying the surd. In this example square root of {{$num1}} <span id="simplified"> </span> </p>
                        <h2>√{{$num1}} = <span id="simplified-root" > </span></h2>
                    </div>
                </div>
                <div class="row">
                    <h1 class=" col-12 py-3 " style="color:black;  ">How to Calculate The Square Root of {{$num1}} with a Calculator</h1>
                </div>
                <div class="row py-3">
                    <div class="col-12">
                        <p>If you have a calculator then the simplest way to calculate the square root of {{$num1}} is to use that calculator. On most calculators you can do this by typing in {{$num1}} and then pressing the √x key. You should get the following result:</p>
                        <h2>√{{$num1}} ≈ <span id="square-root"> </span></h2>
                    </div>
                </div>
                <div class="row">
                    <h1 class=" col-12 py-3 " style="color:black;  ">How to Calculate the Square Root of {{$num1}} with a Computer</h1>
                </div>
                <div class="row py-3">
                    <div class="col-12">
                        <p>On a computer you can also calculate the square root of {{$num1}} using Excel, Numbers, or Google Sheets and the SQRT function, like so:</p>
                        <h2>√{{$num1}} ≈ <span id="square-root1"> </span></h2>
                    </div>
                </div>
                @if(ceil(sqrt($num1)) != floor(sqrt($num1)))
                    <div class="row">
                        <h1 class=" col-12 py-3 " style="color:black;  ">What is the Square Root of {{$num1}} Rounded?</h1>
                    </div>
                    <div class="row py-3">
                        <div class="col-12">
                            <p>Sometimes you might need to round the square root of {{$num1}} down to a certain number of decimal places. Here are the solutions to that, if needed.</p>
                            <h2>{{$num1}}th: √{{$num1}} ≈ {{round(sqrt($num1),1)}}</span></h2>
                            <h2>{{$num1}}0th: √{{$num1}} ≈ {{round(sqrt($num1),2)}}</span></h2>
                            <h2>{{$num1}}00th: √{{$num1}} ≈ {{round(sqrt($num1),3)}}</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <h1 class=" col-12 py-3 " style="color:black;  ">What is the Square Root of {{$num1}} as a Fraction?</h1>
                    </div>
                    <div class="row py-3">
                        <div class="col-12">
                            <p>We covered earlier in this article that only a rational number can be written as a fraction, and irrational numbers cannot.</p>
                            <p>Like we said above, since the square root of {{$num1}} is an irrational number, we cannot make it into an exact fraction. However, we can make it into an approximate fraction using the square root of {{$num1}} rounded to the nearest hundredth.</p>
                        </div>
                        </div>
                @endif
                <div class="row">
                    <h1 class=" col-12 py-3 " style="color:black;  ">What is the Square Root of {{$num1}} Written with an Exponent?</h1>
                </div>
                <div class="row py-3">
                    <div class="col-12">
                        <p>All square root calculations can be converted to a number (called the base) with a fractional exponent. Let's see how to do that with the square root of {{$num1}}:</p>
                        <h1>√b = b <sup>½</sup></h1>
                        <h1>√{{$num1}} = {{$num1}} <sup> ½</sup></h1>
                    </div>
                </div>
                <div class="row">
                    <h1 class=" col-12 py-3 " style="color:black;  ">How to Find the Square Root of {{$num1}} Using Long Division</h1>
                </div>
                <div class="row py-3">
                    <div class="col-12">
                        <div class="step-1">
                            <p>Finally, we can use the long division method to calculate the square root of {{$num1}}. This is very useful for long division test problems and was how mathematicians would calculate the square root of a number before calculators and computers were invented.</p>
                            <h2>Step 1</h2>
                            <p>Set up {{$num1}} in pairs of two digits from right to left and attach one set of 00 because we want one decimal:</p>
                            <table class="long-division ">
                                <tbody><tr>
                                </tr>
                                <tr>
                                <td class="px-3">
                                <div style="border-top: 1px solid #000;">{{$num1}}</div>
                                </td>
                                <td>
                                <div class=""style="border-top: 1px solid #000;">00</div>
                                </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="step-2">
                            <h2>Step 2</h2>
                            <p>Starting with the first set: the largest perfect square less than or equal to {{$num1}} is 9, and the square root of 9 is 3 . Therefore, put 3 on top and 9 at the bottom like this:</p>
                            <table class="long-division">
                                <tbody><tr>
                                <td style="color: green; font-weight: bold; ">3</td>
                                </tr>
                                <tr>
                                <td>
                                <div style="border-top: 1px solid #000;">12</div>
                                </td>
                                <td>
                                <div style="border-top: 1px solid #000;">00</div>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                <div>9</div>
                                </td>
                                <td>
                                <div></div>
                                </td>
                                </tr>
                                </tbody></table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <form class="form-bg" action="{{ url('/factor-pair') }}" method="post">
                            @csrf
                            <div class="h4 text-light">Find the Factor Pair</div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <span>Enter a number </span>
                                    <input class="effect-2" name="num1" id="num1" oninput="calculate()"
                                        type="text" placeholder="">
                                </div>
                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn btn-color"
                                        style="width: {{ $num1 }}0%;">Calculate </button>
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
        document.getElementById("square-root").textContent = Math.sqrt({{$num1}}).toFixed(4);
        document.getElementById("square-root1").textContent = Math.sqrt({{$num1}});
        checkperfectsquare({{ $num1 }});
        simplifiedSquareRoot({{$num1}});;
    }

    function checkperfectsquare(n) {
        if (Math.ceil(Math.sqrt(n)) ==
            Math.floor(Math.sqrt(n))) {
            document.getElementById("perfect-square").textContent = "a Perfect Square";
            document.getElementById("simplified-root").textContent = Math.sqrt(n);
            document.getElementById("simplified-para").textContent = "Since {{$num1}} is a perfect square it can be simplified because the result will always be equal to a whole number. Let's simplify the square root of {{$num1}}:"
        } else {
            document.getElementById("perfect-square").textContent = "Not a Perfect Square";
        }
    }

    function simplifiedSquareRoot(num) {
        let root = Math.sqrt(num); // finding the square root of the number
        let result = "";
        // check if the root is a whole number
        if (root % 1 === 0) {
            return root;
        }
        // check if the root can be simplified
        for (let i = 2; i <= root; i++) {
            if (num % (i * i) === 0) {
                result = i + "√" + num / (i * i);
                break;
            }
        }
        // if the root cannot be simplified, return the root
        if (result === "") {
            result = root;
            document.getElementById("simplified").textContent= "can not be simplified"
            document.getElementById("simplified-root").textContent = "{{$num1}} is already in its simplest radical form."
        }
        else{
            document.getElementById("simplified-root").textContent = result
        }
        
    }
</script>
@include('math.math-scripts')

</html>
