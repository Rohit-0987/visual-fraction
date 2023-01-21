<!doctype html>
<html>

<head>
    @include('links')
    <link href="{{ URL::asset('assets/css/percentage-show.css') }}" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body onload="calculate()">
    @include('navbar')
    <div class="container w-full mt-md-5 mt-3">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <p class="col-12 h1">What is {{ $num1 }}% of {{ $num2 }} ?</p>
                    <p class="col-12 fs-8" style="color: #0a4b78">
                        Learn how to calculate what {{ $num1 }}% of {{ $num2 }} is without using a fancy
                        percentage calculator. In this brief, step by step guide, we'll show you exactly how to work out
                        the percentage of literally any number. It'll take you less than one minute to do and give you
                        all the knowledge you need to work out future percentages manually - all by yourself!</p>
                </div>
                <div class="row">

                    <p class="fs-8 col-12">In a rush and just need to know the answer?<b>{{ $num1 }}% of
                            {{ $num2 }} is <span value="hi" id="res"></span></p> </b>
                </div>
                <div class="row my-3">
                    <div class="col-md-12 col-12">
                        <form class="form-bg">
                            <div class="row  ">
                                <div class="col-md-1  col-12 gx-0 px-0">
                                    <p style="text-align: center">what is</p>
                                </div>
                                <div class="col-md-2 col-12 gx-2 px-2 ">
                                    <input class="effect-2" name="num1" oninput="calculate2()" id="num1"
                                        type="number" placeholder="">
                                </div>
                                <div class="col-md-1 col-12 gx-0 px-0">
                                    <p style="text-align: center">% of</p>
                                </div>
                                <div class="col-md-2 col-12 gx-2 px-2">
                                    <input class="effect-2" name="num2" oninput="calculate2()" id="num2"
                                        type="number" placeholder="">
                                </div>
                                <div class="col-md-3 py-3" style="border-right: 0.5px solid grey">
                                </div>
                                <div class="col-md-2">
                                    <input class="effect-2 " style="background-color:#b8e6bf" readonly name="result"
                                        id="result" type="number" placeholder="">
                                </div>
                            </div>
                            <hr>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="h2">Calculate {{ $num1 }}% of {{ $num2 }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>There are many reasons why you might want to calculate the percentage of a number. In every
                            day life we use percentages all the time (sometimes without even knowing it) to understand
                            the world around us.</p>
                        <p>For example: let's say you're in a store looking to get a sweet Black Friday sale. The new
                            PlayStation you want is currently 35% off the usual price of $899. How much are you going to
                            pay? By knowing how to quickly calculate percentages, you can figure that answer out.</p>
                        <p>Another might be that when you actually come to pay for that PlayStation, you have to pay
                            sales tax. Now you need to add a percentage to the amount you have. Again, we can learn how
                            to do all of these calculations in our head.</p>
                        <p>Of course, you can alwayd ask Siri to help you out or type the question into a Google search
                            (which is probably how you found this little page on the internet) but you can actually work
                            out the percentage of a number very easily without having to resort to technology. For our
                            little example here, we want to know what {{ $num1 }}% of {{ $num2 }} is.
                            Let's do some quick math together and work it out.</p>
                        <p>The easiest way to work this out is to take the number we want to work out the percentage of,
                            which is {{ $num2 }}, and divide it by 100. Why do we do this? Well "percent"
                            really means one part in every hundred, which is what we want to calculate.</p>
                        <p>The calculation is pretty simple, but if you have any problems or get any errors, please
                            contact us.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="calculation has-text-centered">
                        <span class="frac first">
                            <span>{{ $num2 }}</span>
                            <span class="symbol">/</span>
                            <span class="bottom">100</span>
                        </span>
                        <span class="operator">= {{ $num2 / 100 }}</span></span>
                    </div>
                    <div class="col-12">
                        <p>Once we have that value, all we need to do to work out the answer is multiply it by our first
                            number, {{ $num1 }}:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="calculation has-text-centered">
                        <p class="operator">{{ $num2 / 100 }} x {{ $num1 }} = {{ ($num2 / 100) * $num1 }}</p>
                    </div>
                    <div class="col-12">
                        <p>That's literally all there is to it. You can use this method to work out and calculate the percentage of any number. If you're feeling extra fancy and want to know what the formula is for calculating the percentage, let's take a look at that too:</p>
                    </div>
                    <div class="calculation has-text-centered">
                        <p class="operator">P * X = Y</p>
                    </div>
                </div>
                <div class="row">
                    <div class="co-12">
                        <ul>
                            <li>P = the number we got by dividing {{$num2}} by 100</li>
                            <li>X = the percentage we want to work out, {{$num1}}</li>
                            <li>Y = the final answer, {{ $num2 / 100 }} x {{ $num1 }} = {{ ($num2 / 100) * $num1 }}</li>
                        </ul>
                    </div>
                </div>
                <div class="row">

                </div>
                <div class="row">
                    <p>As you can see, percentages are often very easy math problems to solve. Sometimes if you are dealing with decimal points and large numbers, you may reach for the calculator to help you out, but at least it saves you the embarassment of being out in public and yelling "Hey Siri, what is 58% of 253?" into your phone.</p>
                </div>
                <div class="row">
                    <p>Head back to the <a href="{{url('percentage')}}" style="color: brown"> percentage calculator</a> to work out any more calculations you need to make or be brave and give it a go by hand. Hopefully this article has shown you that it's easier than you might think!</p>
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
        var num3 = document.getElementById("num1").value;
        var num4 = document.getElementById("num2").value;

        if (!num3 || !num4) {
            document.getElementById("num1").value = num1;
            document.getElementById("num2").value = num2;
            calculate2();
        }

        if (!num1 || !num2) {} else {
            var res = ((num2 / 100) * num1);
            document.getElementById("res").textContent = res.toFixed(2);
            document.getElementById("res1").textContent = res.toFixed(2);
        }
    }

    function calculate2() {
        var num1 = document.getElementById("num1").value;
        var num2 = document.getElementById("num2").value;
        if (!num1 || !num2) {} else {
            var res = ((num2 / 100) * num1);
            document.getElementById("result").value = res.toFixed(2);
        }
    }
</script>
@include('math.math-scripts')
</html>
