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
                    <p class="col-12 h1">{{$num1}} is what percent of {{$num2}}?</p>
                    <p class="col-12 fs-8" style="color: #0a4b78">
                        If you want to find out what {{$num1}} as a percentage of {{$num2}} is then this is the article for you. In this quick and straightforward guide, we'll show you exactly how to find out exactly what one number as a percentage of another is. It's very simple and will help you to calculate future percentage problems like this yourself without the need to search for it.</p>
                </div>
                <div class="row">

                    <p class="fs-8 col-12">In a rush and just need to know the answer? {{$num1}} is <span value="hi" id="res"></span>% of {{$num2}}.</p> </b>
                </div>
                <div class="row my-3">
                    <div class="col-md-12 col-12">
                        <form class="form-bg" >
                            <div class="row  ">
                                <div class="col-md-2 col-12 gx-2 px-2 ">
                                    <input class="effect-2" oninput="calculate2()" name="num1" id="num1" type="number" placeholder="">
                                </div>
                                <div class="col-md-2 col-12 gx-0 px-0">
                                    <p style="text-align: center">is what % of</p>
                                </div>
                                <div class="col-md-2 col-12 gx-2 px-2">
                                    <input class="effect-2" name="num2" oninput="calculate2()" id="num2" type="number" placeholder="">
                                </div>
                                <div class="col-md-3 py-3" style="border-right: 0.5px solid grey">
                                </div>
                                <div class="col-md-2" >
                                    <input class="effect-2 " style="background-color:#b8e6bf" readonly name="result" id="result" type="text" placeholder="">
                                </div>
                            </div>
                            <hr>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="h2">{{$num1}} is what % of {{$num2}}?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Using percentages is something all of us do every single day, whether we realise it or not. It's such a common task but often we forget just how easy it is to work it out for ourselves and reach for Siri or a quick Google search. That's totally fine, and you probably found this page doing just that, but it is very helpful to know how to do it yourself.</p>
                        <p>So, for example, let's say you just ate a meal at a restaurant and the bill comes in at $108. You have a $10 bill that you want to leave as a tip. What percentage of the check are you tipping? Is it enough or should you tip more? By working out the percentage of one number to another, you can easily figure that out.</p>
                        <p>Let's dive into this problem and explain exactly how to solve it. First of all, whenever we want to know what percentage {{$num1}} is of {{$num2}} what we're really talking about is a fraction:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="calculation has-text-centered">
                        <span class="frac first">
                            <span>{{ $num1 }}</span>
                            <span class="symbol">/</span>
                            <span class="bottom">{{$num2}}</span>
                        </span>
                    </div>
                    <div class="col-12">
                        <p>So to work out the percentage from a fraction, the first step is to divide the number above the line (the numerator) by the number below the line (the denominator):</p>
                    </div>
                </div>
                <div class="row">
                    <div class="calculation has-text-centered">
                        <span class="frac first">
                            <span>{{ $num1 }}</span>
                            <span class="symbol">/</span>
                            <span class="bottom">{{$num2}}</span>
                        </span>
                        <span class="operator">= {{ $num1 / $num2 }}</span></span>
                    </div>
                    <div class="col-12">
                        <p>Our fraction is now in decimal format, so how do we get to a percentage from there? If you said "multiply {{ $num1 / $num2 }} by 100" then you deserve a cookie, my friend!</p>
                    </div>
                    <div class="calculation has-text-centered">
                        <p class="operator">{{ $num1 / $num2 }}  X 100 = {{round((($num1 / $num2)*100),2)}}%</p>
                    </div>
                </div>
                <div class="row">
                    <p>And there you have it! You just successfully calculated the percentage of 534 to 1128. You can now go forth and use this method to work out and calculate the percentages of any numbers.</p>
                    <p>If you end up having to do this will large numbers than generate a lot of decimal places, you may still need a calculator to work out the percentage, but you definitely shouldn't need to Google or ask Siri again now that you have the knowledge to manually work it out.</p>
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
            var res = ((num1/num2)*100);
            document.getElementById("res").textContent = res.toFixed(2);
            document.getElementById("res1").textContent = res.toFixed(2);
            // document.getElementById('res').value = res.toFixed(2);;
        }
    }

    function calculate2() {
        var num1 = parseFloat(document.getElementById('num1').value);
        var num2 = parseFloat(document.getElementById('num2').value);
        if (!num1 || !num2) {} else {
            var res = ((num1/num2)*100);
            var result = res.toFixed(2) + "%";
            document.getElementById("result").value = result;
        }
    }
</script>
@include('math.math-scripts')
</html>
