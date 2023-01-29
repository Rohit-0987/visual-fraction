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
                    <p class="col-12 h2">Factors Pair of {{ $num1 }} </p>
                    <p class="col-12 fs-8" style="color: #0a4b78; font-size:1.{{ $num1 }}rem; ">
                        So you need to find the factor pairs for {{ $num1 }} do you? Fear not! In this quick
                        guide we'll describe what the factor pairs of {{ $num1 }} are, how you find them and
                        list them out for you to prove the calculation works. Let's dive in!</p>
                </div>
                <div class="row">
                    <p class="h2 col-12 " style="color:black;  ">What Are Factor Pairs?</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>A factor pair is a combination of two factors which can be multiplied together to equal
                            {{ $num1 }}. In proper math terms, the number {{ $num1 }} is called the
                            product and the two numbers that can be multiplied together to equal it are called the
                            factors.
                        </p>
                        <p>In order to work out the factor pairs of {{ $num1 }} we need to first get all of the
                            <a href="/factor/what-is-the-factors-of-{{ $num1 }}"> factors of
                                {{ $num1 }}</a>. Once you have the list of all those factors we can pair them
                            together to list out all of the factor pairs.</p>
                        <p>The complete list of factors for {{ $num1 }} are 1 and {{ $num1 }}.</p>
                    </div>
                </div>
                <div class="row">
                    <p class="h2 col-12 " style="color:black;  ">List of Factor Pairs for {{ $num1 }}</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Okay, so we know all of the factors for {{ $num1 }} now and to work out the factor
                            pairs we can go through that list and find all of the different combinations that can be
                            used to multiply together to result in {{ $num1 }}.
                        </p>
                        <p>If there are a lot of factors then it might take you a little while to calculate all of the
                            factor pairs, but luckily we have the power of computers and can calculate the factor pairs
                            of {{ $num1 }} for you automatically:</p>
                    </div>
                </div>
                @for($i=1;$i<=$num1;$i++)
                    @if($num1%$i==0)
                        <div class="row">
                            <div class="col-8">
                              <span class="px-3">•</span>{{$i}} x {{$num1/$i}} = {{$num1}}
                            </div>
                        </div>
                    @endif    
                @endfor
                <div class="row py-3">
                    <div class="col-11">
                        <p>So there you have it. A complete guide to the factor pairs of 5. Hopefully this will help you in your math class to learn (or teach) factor pairs in a way that is easy to understand.</p>
                        <p>Feel free to try the calculator below to check another number or, if you're feeling fancy, grab a pencil and paper and try and do it by hand. Just make sure to pick small numbers! ;)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <form class="form-bg" action="{{ url('/factor-pair')}}" method="post">
                            @csrf
                            <div class="h4 text-light">Find the Factor Pair</div>
                            <hr>
                            <div class="row">
                                    <div class="col-12">
                                        <span>Enter a number </span>
                                        <input class="effect-2" name="num1" id="num1" oninput="calculate()" type="text" placeholder="">
                                    </div>
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
        document.getElementById("count").textContent = count;
        document.getElementById("total-count").textContent = count * 2;
    }
</script>
@include('math.math-scripts')

</html>
