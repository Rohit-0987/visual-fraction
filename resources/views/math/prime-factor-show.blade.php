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

<body onload="calculate()" style="font-size: 1.2rem">
    @include('navbar')
    <div class="container w-full mt-md-{{ $num1 }} mt-3">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <p class="col-12 h2">Prime Factors of {{ $num1 }} </p>
                    <p class="col-12 fs-8" style="color: #0a4b78; font-size:1.{{ $num1 }}rem; ">
                        Looking to get a list of the prime factors of {{ $num1 }}? In this article we'll give
                        you all of the information you need, including the definition of the prime factors of
                        {{ $num1 }}, how to calculate the prime factors of {{ $num1 }} (also known as
                        the prime factorization of {{ $num1 }}). As a bonus, we'll also list out the prime
                        factor tree of {{ $num1 }} the product of prime factors of {{ $num1 }}, and tell
                        you how many prime factors {{ $num1 }} has.</p>
                </div>
                <div class="row">
                    <p class="h2 col-12 " style="color:black;  ">Prime Factors of {{ $num1 }} Definition</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Every number can be represented as a product of prime numbers. So when we talk aqbout prime
                            factorization of {{ $num1 }}, we're talking about the building blocks of the
                            number. A prime factor is a positive integer that can only be divided by 1 and itself. The
                            prime factors of {{ $num1 }} are all of the prime numbers in it that when multipled
                            together will equal {{ $num1 }}.
                        </p>
                        <p>Let's look at how to find all of the prime factors of {{ $num1 }} and list them out.
                        </p>
                    </div>
                </div>
                {{-- <div class="row">
                    <p class="h2 col-12 " style="color:black;  ">How to Find the Prime Factors of {{ $num1 }}
                    </p>
                </div> --}}
                <div class="row">
                    <div class="col-12">
                        <p>You'll often see the process of finding prime factors of {{ $num1 }} referred to as
                            prime factorization. To get the prime factors of {{ $num1 }} we need to divide
                            {{ $num1 }} by the smallest prime number possible. You then repeat the same process
                            by taking the result and dividing that number by the smallest prime number. Eventually, you
                            end up with the number 1.
                        </p>
                        <p>This process creates something called a prime factor tree of {{ $num1 }}. The prime
                            numbers used in this tree are the prime factors of {{ $num1 }}. Let's look at the
                            prime factor tree for {{ $num1 }}:</p>
                    </div>
                </div>
                    @php($num2 = $num1)
                    @for ($i = $num2; $i >= 1; $i--)
                        @for ($j = 2; $j <= $num2; $j++)
                                @if ($num2 % $j == 0)
                                <p>
                                    <p class="fs-4"><span>•</span> {{ $num2 }} ÷ {{ $j }} ={{ $num2 = $num2 / $j }}</p></p>
                                       @break
                                @endif
                        @endfor
                    @endfor
                <div class="row">
                    <div class="col-12">
                        <p>Put simply, all of the prime numbers that you used to divide above are the prime factors of
                        {{ $num1 }} as well. So what we are left with is the answer to your search, the
                        prime factors of {{ $num1 }}:</p>
                    </div>
                </div>
                    @php($num2 = $num1)
                    @for ($i = $num2; $i >= 1; $i--)
                        @for ($j = 2; $j <= $num2; $j++)
                            @if ($num2 % $j == 0)
                                &nbsp &nbsp{{ $j }} @php($num2 = $num2 / $j)
                                @break
                            @endif
                        @endfor
                    @endfor
                <div class="row">
                    <div class="col-8 h2">
                        <p>How Many Prime Factors of {{ $num1 }} Are There?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <p>If we count up all of the prime factors of {{ $num1 }} used in the prime factor tree
                            above, we can see that {{ $num1 }} has a total of <span id="count"></span>
                            prime factors.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <h2>Product of Prime Factors of {{ $num1 }}</h2>
                        <p>The prime factors shown above @php($num2 = $num1)
                            @for ($i = $num2; $i >= 1; $i--)
                                @for ($j = 2; $j <= $num2; $j++)
                                    @if ($num2 % $j == 0)
                                        {{ $j }} @php($num2 = $num2 / $j)
                                        @break
                                    @endif
                                @endfor
                            @endfor are completely unique to 108. When we
                            multiply all of them together the result will be {{ $num1 }} and this is what we
                            call the product of
                            prime factors of {{ $num1 }}. The prime factor products of {{ $num1 }} are
                            listed below:
                        </p>
                        <p>@php($num2 = $num1)

                            @for ($i = $num2; $i >= 1; $i--)
                                @for ($j = 2; $j <= $num2; $j++)
                                    @if ($num2 % $j == 0)
                                        {{ $j }} @if($num2 / $j != 1)x @endif @php($num2 = $num2 / $j)
                                        @break
                                    @endif
                                @endfor
                            @endfor
                            = {{$num1}}
                        </p>
                        <p>
                            So there you have it. A complete guide to the factors of {{$num1}}. You should now have the knowledge and skills to go out and calculate your own factors and factor pairs for any number you like.
                        </p>
                        <p>Feel free to try the calculator below to check another number or, if you're feeling fancy, grab a pencil and paper and try and do it by hand. Just make sure to pick small numbers!</p>
                    </div>
                </div>
                <div class="row">
                    <p class="col-12 h1">Prime Factor Calculator</p>
                    <p class="col-12 fs-5">A quick and easy prime factor calculator to work out the prime factors and product of any number.</p>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <form class="form-bg" action="{{ url('/prime-factor')}}" method="post">
                            @csrf
                            <div class="h4 text-light">Find Prime Factors </div>
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
        res = 1;
        var num = {{ $num1 }};
        for (var i = num; i >= 1; i--) {
            for (var j = 2; j <= num; j++) {
                if (num % j == 0) {

                    count++;
                    res = res*j;
                    num = num / j;
                    break;
                }
            }
        }
        console.log(res)
        document.getElementById("count").textContent = count;
    }
</script>
@include('math.math-scripts')

</html>
