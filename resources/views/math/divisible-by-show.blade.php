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
                    <h1 class="col-12 my-4 h2">Is {{ $num1 }} Divisible By {{ $num2 }}? </h1>
                    <h4 class="col-12 my-4" style="color: #0a4b78;  ">
                        In this quick and easy guide, we'll work out whether {{ $num1 }} is divisible by
                        {{ $num2 }}. There are some simple rules we can follow to decide whether one number is
                        divisible by another without ever needing to even do the division!</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>First up, let's clarify what we mean by "{{ $num1 }} is divisible by
                            {{ $num2 }}". What we want to check is whether {{ $num1 }} can be divided by
                            {{ $num2 }} without any remainder (i.e the answer is a whole number).</p>

                    </div>
                </div>
                <div class="row text-center fs-3 fw-bold">
                    <div class="col-md-2 col-3">
                        <div class="border-3 border-bottom border-dark">{{ $num1 }}</div>
                        <div class="">{{ $num2 }}</div>
                    </div>
                    <div class="col-1 my-auto">
                        =
                    </div>
                    <div class="col-md-2 my-auto col-3">
                        <span id="result"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-4">
                        <p id="para"></p>
                        <p>Hopefully now you know exactly how to work out whether one number is divisible by another. Could I have just told you to divide {{$num1}} by {{$num2}} and check if it is a whole number? Yes, but aren't you glad you learned the process?</p>
                        <p>Give this a go for yourself and try to calculate a couple of these without using our calculator. Grab a pencil and a piece of paper and pick a couple of numbers to try it with.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-12">
                        <form class="form-bg" action="{{ url('/divisible-by')}}" method="post">
                            @csrf
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                        <span class="py-3 text-center">is </span>
                                        <input class="effect-2" name="num1" id="num1" oninput="calculate()" type="number" placeholder="">
                                    </div>
                                    <div class="col-12 text-center">
                                        <span class="py-3 text-center">divisible by </span>
                                        <input class="effect-2 mx-0" name="num2" id="num2" oninput="calculate()" type="number" placeholder="">
                                    </div>
                                    
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 m-auto mt-2">
                                    <button type="submit"  class="btn btn-color"
                                        style="width: 100%;">Calculate </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>Next Divided by X Calculation</h2>
                        <a href="/divisible-by/is-{{$num1}}-divisible-by-{{$num2 +1}}"><li>Is {{$num1}} divisible by {{$num2+1}}?</li></a>
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
        var num1 = {{ $num1 }};
        var num2 = {{ $num2 }};
        var result = num1 / num2;
        document.getElementById('result').textContent = result.toFixed(2);
        let decimal = result % 1;
        // document.getElementById('decimal').textContent=;
        if(num1%num2==0){
            document.getElementById("para").innerHTML = "Since the answer to our division is a whole number, we know that "+num1 + " is divisible by "+num2 +" ."
        }    
        else{
            document.getElementById("para").innerHTML = "As you can see, when we do this division we have a decimal of "+decimal.toFixed(4)+". Since the division does not result in a whole number, this shows us that "+num1 +" is not divisible by "+num2+"."
        }
    }
</script>
@include('math.math-scripts')

</html>
