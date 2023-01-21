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
                    <p class="col-12 h1">What is the Factorial of {{ $num1 }} ?</p>
                    <p class="col-12 fs-8" style="color: #0a4b78">
                        In this article we'll show you how to calculate the factorial of 1 with a really quick,
                        step-by-step explanation of how it's calculated.</p>
                </div>
                <div class="row">

                    <p class="fs-8 col-12">First off, what exactly is a factorial? The factorial is the result of
                        multiplying all whole numbers in a chosen number (in this case {{ $num1 }}) all the way
                        down to 1.</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>You will generally see factorials expressed with an exclamation mark after the number, like
                            so:</p>
                        <span class="operator fs-3"> {{ $num1 }}!</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>So let's take 6 and calculate the factorial by multiplying each whole number:</p>
                    </div>
                </div>
                <div class="row">
                    <p class="operator fs-3">
                        @if($num1>5)
                            @for ($num = $num1; $num >= $num1-4; $num--)
                                {{ $num }}
                                @if ($num != $num1-4)
                                   x
                                @else
                                x ...   
                                @endif
                            
                            @endfor
                        @else
                            @for ($num = $num1; $num >= 1; $num--)
                                @if($num1==0) 
                                    0 x =1
                                @else
                                    {{ $num }}
                                    @if ($num != 1)
                                    X
                                    @endif
                                @endif   
                                
                            @endfor
                        @endif    
                        =<span id="res"></span>
                    </p>
                </div>
                <div class="row">
                    @if($num1>5)
                        <p>In this case, the number of whole numbers in {{$num1}} is more than five. You can see how this can quickly get out of hand with larger numbers.</p>
                    @endif
                    <p>Factorials are used in math quite a lot when calculating the number of possible combinations or permeatations of something. If you think about shuffling a deck of 52 cards, you can use factorials to calculate how many possible orders there are.</p>
                    <p>When describing a factorial you would usually say {{$num1}}! like "{{$num1}} factorial", "{{$num1}} shriek", or "{{$num1}} bang". Personally, I prefer shriek!</p>
                    <p>Hopefully this article has helped you in your quest to calculate the factorial of 9. Feel free to share with your friends, family, teachers, and anybody who might be interested in factorials of numbers (which is surely everyone!).</p>
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
        var fact = 1;
        for (var num = {{ $num1 }}; num >= 1; num--) {
            fact = fact * num;
        }
        document.getElementById("res").textContent = fact;
        console.log(fact)
    }
</script>
@include('math.math-scripts')
</html>
