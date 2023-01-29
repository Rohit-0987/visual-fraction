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
    <div class="container w-full mt-md-10 mt-3">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">

                <div class="row">
                    <h1 class="col-12 my-3 h2">Is {{ $num1 }} Divisible By Anything?
                    </h1>
                    <h4 class="col-12" style="color: #0a4b78;  ">
                        Okay, so when we ask if {{ $num1 }} is divisible by anything, we are looking to see if
                        there are any WHOLE
                        numbers that can be divided into {{ $num1 }} that will result in a whole number as the
                        answer. In this
                        short guide, we'll walk you through how to figure out whether {{ $num1 }} is divisible
                        by anything. Let's
                        go!</h4>
                    <p>Fun fact! All whole numbers will have at least two numbers that they are divisible by. Those
                        would be the actual number in question (in this case {{ $num1 }}), and the number 1.</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>So, the answer is yes. The number {{ $num1 }} is divisible by <span id="count">
                            </span> number(s).</h4>
                        <p>Let's list out all of the divisors of {{ $num1 }}:</p>
                        <ul>
                            @for ($i = 1; $i <= $num1; $i++)
                                @if ($num1 % $i == 0)
                                    <li>{{ $i }}</li>
                                @endif
                            @endfor
                        </ul>
                        <p>When we list them out like this it's easy to see that the numbers which {{ $num1 }}
                            is divisible by are @for ($i = 1; $i <= $num1; $i++)
                                @if ($num1 % $i == 0)
                                    {{ $i }},
                                @endif
                            @endfor.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-4" style="background-color:rgb(236, 236, 236); font-weight:600;">
                        <p>You might be interested to know that all of the divisor numbers listed above are also known
                            as
                            the <a href="/factor/what-is-the-factors-of-{{ $num1 }}"> Factors of
                                {{ $num1 }}</a>.</p>
                        <p>Not only that, but the numbers can also be called the divisors of {{ $num1 }}.
                            Basically, all of those numbers can go evenly into {{ $num1 }} with no remainder.
                        </p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 mt-4">
                        <p>As you can see, this is a pretty simple one to calculate. All you need to do is list out all of the factors for the number {{$num1}}. If there are any factors, then you know that {{$num1}} is divisible by something.</p>
                        <p>Give this a go for yourself and try to calculate a couple of these without using our calculator. Grab a pencil and a piece of paper and pick a couple of numbers to try it with.</p>
                    </div>
                </div>
                <div class="row">
                    <h1>Divisible by Anything Calculator</h1>
                    <p>Enter another number below to find out whether it is divisible by anything.</p>
                    <div class="col-md-8 col-12">
                        <form class="form-bg" action="{{ url('/divisible-by-anything')}}" method="post">
                            @csrf
                            <hr>
                            <div class="row">
                                    <div class="col-12">
                                        <span>Enter a number </span>
                                        <input class="effect-2" name="num1" id="num1" oninput="calculate()" type="text" placeholder="">
                                    </div>
                                    <div class="col-6 m-auto mt-2">
                                        <button type="submit"  class="btn btn-color"
                                            style="width: 100%;">Calculate </button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>Next Divisible by Anything Calculation</h2>
                        <ul>
                            <li style="color: #b26200"><a href="/divisible-by-anything/is-{{$num1 + 1}}-divisible-by-anything">Is {{$num1+1}} Divisible by Anything?</a></li>
                        </ul>
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
        let count = 0;
        for (let i = 1; i <= {{ $num1 }}; i++) {
            if ({{ $num1 }} % i == 0) {
                count++;
            }
        }
        console.log(count)
        document.getElementById('count').textContent = count;
    }
</script>
@include('math.math-scripts')

</html>
