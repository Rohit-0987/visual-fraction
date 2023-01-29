<!doctype html>
<html>

<head>
    @include('links')
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
                <div class="row ">
                    <h1 class="col-12 mt-4">Cube Root of {{ $num1 }}</h1>
                    <p class="col-12 fs-8" style="color: #0a4b78; font-size:1.5rem; ">
                        In this article we will look at the cube root of the number {{ $num1 }} and show you how
                        to calculate it and determine if it is a perfect cube or not.</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>What is a cube root?</h2>
                    </div>
                    <div class="col-12">
                        <p>The cube root of {{ $num1 }} is another number that when multiplied by itself twice,
                            would be exactly equal to {{ $num1 }}.</p>
                        <p>We would normally express this problem in mathematical form by using the cube root symbol
                            with the number alongside it:</p>
                        <h2>∛{{ $num1 }}</h2>
                        <p>You might notice that this symbol is very similar to the square root symbol. The only
                            difference is the number, called the index, above the symbol, which lets us know this a cube
                            root calculation.</p>
                        <p>To recap: the <span class="col-4 p-1"
                                style="background-color:rgb(236, 236, 236); font-weight:600">√</span> symbol itself is
                            called the radical symbol, the number above it is called the index, and the actual number,
                            {{ $num1 }}, is called the radicand.</p>
                        <p>The basic formula we use to calculate a cube number from the result is a number which we'll
                            call <span class="col-4 p-1"
                                style="background-color:rgb(236, 236, 236); font-weight:600">n</span> in this example,
                            that when multiplied by itself twice, is equal to {{ $num1 }}:</p>
                        <h2>n × n × n = {{ $num1 }}</h2>
                        <p>When we use <span class="col-4 p-1"
                            style="background-color:rgb(236, 236, 236); font-weight:600">∛{{$num1}}</span> , the actual math calculation we perform is <span class="col-4 p-1"
                            style="background-color:rgb(236, 236, 236); font-weight:600">{{$num1}} <sup>⅓</sup></span>  . This means you can use that
                            formula in Excel, Google Sheets, or Mac Numbers to calculate the cube root:</p>
                        <p><span class="col-4 p-1"
                            style="background-color:rgb(236, 236, 236); font-weight:600">={{$num1}} ^ (1/3)</span></p>
                        <p>We calculated the cubic root of {{$num1}} for this article using a scientific calculator. If you have one yourself, you can confirm the results by typing the following into the calculator:</p>    
                        <ul>
                            <li>Type the number: {{$num1}}</li>
                            <li>Press the [∛x] button</li>
                        </ul>
                        <p>You should now be able to confirm that the cube root of 854 is:</p>
                        <h1>∛{{$num1}} ≈ <span id="result"> </span></h1>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <h3>Is {{$num1}} a perfect cube number?</h3>
                            <p>Whenever the cube root of a given number is a whole number without any fractional or decimal part, we call this a perfect cube.</p>
                            <p>These are important for a lot of different math functions and can be used in simpler settings like carpenty and room design all the way through to more advanced calculations in physics and astronomy.</p>
                            <p>For the number {{$num1}} we have already calculated the answer of <span class="col-4 p-1"
                                style="background-color:rgb(236, 236, 236); font-weight:600"><span id="result1"> </span></span> using a scientific calculator and since this <span id="whole-number"></span> , we also know that {{$num1}} is <span id="perfect-cube"> </span>.</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <h3>Is the cube root of {{$num1}} a rational or irrational number?</h3>
                            <p>This is a commonly asked question and the answer to whether the cube root of {{$num1}} is rational or irrational is always the same as if it is a perfect cube.</p>
                            <p>Remember that a rational number can be written as a fraction, while irrational numbers can't.</p>
                            <p>So, if a number is a perfect cube, then it's a rational number, but if it is not a perfect cube then it is an irrational number.</p>
                            <p>We just confirmed that {{$num1}} <span id="rational-number"></span> then, because we know it is <span id="perfect-cube1"> </span>.</p>
                        </div>
                    </div>
                    <div class="row">
                        <h1 class=" col-12 py-3 " style="color:black;  ">Rounding the cube root of {{$num1}}</h1>
                    </div>
                    <div class="row py-3">
                        <div class="col-12">
                            <p>There might be occasions when you need to round the result of a cube root calculation down to a specific number of decimal places. Below, we show an example of a few of these to specific decimal places that show up in exam questions:</p>
                            <h2>{{$num1}}th: √{{$num1}} ≈ {{round(pow($num1,1/3),1)}}</span></h2>
                            <h2>{{$num1}}0th: √{{$num1}} ≈ {{round(pow($num1,1/3),2)}}</span></h2>
                            <h2>{{$num1}}00th: √{{$num1}} ≈ {{round(pow($num1,1/3),3)}}</span></h2>
                        </div>
                    </div>
                </div>  
                <div class="row py-3">
                    <div class="col-12">
                        <h3>Practice perfect cube and cube roots using examples</h3>
                        <p>Still here and interested in perfect cubes? You must really love yourself some math!</h2>
                        <p>Take a look at the random calculations in the sidebar on the right hand side of this page and click through to some of the cube root calculations.</p>
                        <p>How many of them are perfect cubes? You can also try to think of and calculate some perfect cubes yourself without looking at the list above to test yourself.</p>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-12">
                        <h3>Calculate a cube root problem</h3>
                        <p>If you have an example you want to try and see if it is a perfect cube, enter it in the form below and click calculate to find out if it is.</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-12">
                        <form class="form-bg" action="{{ url('/cube-root') }}" method="post">
                            @csrf
                            <hr>
                            <div class="row ">
                                <div class="col-12">
                                    <h4 text-center>Enter your number in box A below and click "Calculate" to work out
                                        the cube root of the given number.</h4>
                                </div>
                                <div class="col-12 mb-2 mb-md-0 col-sm-12 col-md-12">
                                    <input class="effect-2 mx-0 p-3" name="num1" id="num1" type="number"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 m-auto mt-4">
                                    <button type="submit" class="btn btn-color rounded" style="width: 100%;">Calculate
                                    </button>
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
        let result = Math.cbrt({{$num1}})
        document.getElementById('result').textContent=result;
        document.getElementById('result1').textContent=result;
        checkperfectcube({{ $num1 }});
    }
    function checkperfectcube(n) {
        if (Math.ceil(Math.cbrt(n)) ==
            Math.floor(Math.cbrt(n))) {
            document.getElementById("whole-number").textContent = "is a whole number";
            document.getElementById("perfect-cube").textContent = "a Perfect cube";
            document.getElementById("perfect-cube1").textContent = "a Perfect cube";
            document.getElementById("rational-number").textContent = "is a rational number";
           // document.getElementById("simplified-root").textContent = Math.sqrt(n);
            //document.getElementById("simplified-para").textContent = "Since {{$num1}} is a perfect square it can be simplified because the result will always be equal to a whole number. Let's simplify the square root of {{$num1}}:"
        } else {
            document.getElementById("perfect-cube").textContent = "Not a Perfect cube";
            document.getElementById("perfect-cube1").textContent = "Not a Perfect cube";
            document.getElementById("rational-number").textContent = "is Not a rational number";
            document.getElementById("whole-number").textContent = "Not a whole number";
        }
    }
    </script>
@include('math.math-scripts')

</html>
