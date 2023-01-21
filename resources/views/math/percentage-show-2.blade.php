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
                    <p class="col-12 h1">What is the percentage increase/decrease from {{$num1}} to {{$num2}}?</p>
                    <p class="col-12 fs-8" style="color: #0a4b78">
                        In this article we'll show you how to calculate the percentage increase/decrease from {{$num1}} to {{$num2}}. The calculation is very simple and knowing how to do this will help you calculate futurue increases or decreases in numbers as a percentage without having to search for it (or ask Siri).</p>
                </div>
                <div class="row">

                    <p class="fs-8 col-12">In a rush and just need to know the answer? The percentage increase from {{$num1}} to {{$num2}} is <span id="res"></span>%</p></b>
                </div>
                <div class="row my-3">
                    <div class="col-md-12 col-12">
                        <form class="form-bg" >
                            <div class="row  ">
                                <div class="col-md-4  col-12 gx-0 px-0">
                                    <p  style="text-align: center">What is the % change from</p>
                                </div>
                                <div class="col-md-2 col-12 gx-0 px-0 ">
                                    <input class="effect-2" oninput="calculate3()" name="num1" id="num1" type="number" placeholder="">
                                </div>
                                <div class="col-md-1 col-12 gx-0 px-0">
                                    <p style="text-align: center">to</p>
                                </div>
                                <div class="col-md-2 col-12 gx-0 px-0">
                                    <input class="effect-2" oninput="calculate3()" name="num2" id="num2" type="number" placeholder="">
                                </div>
                                <div class="col-md-1 " style="border-right: 0.5px solid grey">
                                    
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
                        <p class="h2">Percentage increase/decrease from {{$num1}} to {{$num2}}??</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Working out the percentage increase or decrease between two numbers is a common thing to do. For example, a shop owner that sold 783 t-shirts in October and then sold 1053 t-shirts in November. They might want to work out the percentage increase or decrease in sales to see how their store is performing and look for trends or reasons for that change.</p>
                        <p>Like all types of percentage calculations, the way we work out a percentage increase or decrease between two numbers is pretty simple. The resulting number (the second input) is {{$num2}} and what we need to do first is subtract the old number, {{$num1}}, from it</p>
                    </div>
                </div>
                <div class="row">
                    <div class="calculation has-text-centered">
                        <p class="operator">{{ $num2 }}  - {{$num1}} = {{$num2-$num1}}</p>
                    </div>
                    <div class="col-12">
                        <p>Once we've done that we need to divide the result, {{$num2-$num1}}, by the original number, {{$num1}}. We do this because we need to compare the difference between the new number and the original:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="calculation has-text-centered">
                        <span class="frac first">
                            <span>{{$num2-$num1}}</span>
                            <span class="symbol">/</span>
                            <span class="bottom">{{$num1}}</span>
                        </span>
                        <span class="operator">= {{ (($num2-$num1)/$num1) }}</span></span>
                    </div>
                    <div class="col-12">
                        <p>We now have our answer in decimal format. How do we get this into percentage format? We multiply {{ (($num2-$num1)/$num1) }} by 100:</p>
                    </div>
                    <div class="calculation has-text-centered">
                        <p class="operator">{{ (($num2-$num1)/$num1) }}  X 100 = {{round(((($num2-$num1)/$num1)*100),2)}}%</p>
                    </div>
                </div>
                <div class="row">
                    <p>We're done! You just successfully calculated the percentage difference from {{$num1}} to {{$num2}}. You can now go forth and use this method to work out and calculate the increase/decrease in percentage of any numbers.</p>
                    <p>Hopefully this has given you the knowledge needed to go and calculate your own percentage increase or decrease between numbers without the need for Google searches. It's a very good skill to have and working with percentages regularly can help you in other aspects of math, like fractions.</p>
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
            var res = (((num2-num1)/num1)*100);
            document.getElementById("res").textContent = res.toFixed(2);
            document.getElementById("res1").textContent = res.toFixed(2);
            // document.getElementById('res').value = res.toFixed(2);;
        }
    }

    function calculate2() {
        var num1 = parseFloat(document.getElementById('num1').value);
        var num2 = parseFloat(document.getElementById('num2').value);
        if (!num1 || !num2) {} else {
            var res = (((num2-num1)/num1)*100);
            var result = res.toFixed(2) + "%";
            document.getElementById("result").value = result;
        }
    }
</script>
@include('math.math-scripts')
</html>
