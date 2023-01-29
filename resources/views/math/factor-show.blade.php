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
    <div class="container w-full mt-md-5 mt-3">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <p class="col-12 h2">Factors of {{ $num1 }} </p>
                    <p class="col-12 fs-8" style="color: #0a4b78; font-size:1.5rem; ">
                        So you need to find the factors of {{ $num1 }} do you? In this quick guide we'll describe what the factors of {{ $num1 }} are, how you find them and list out the factor pairs of {{ $num1 }} for you to prove the calculation works. Let's dive in!</p>
                </div>
                <div class="row">
                    <p class="h2 col-12 " style="color:black;  ">Factors of {{ $num1 }} Definition</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>When we talk about the factors of {{ $num1 }}, what we really mean is all of the positive and negative integers (whole numbers) that can be evenly divided into {{ $num1 }}. If you were to take {{ $num1 }} and divide it by one of its factors, the answer would be another factor of {{ $num1 }}.
                        </p>
                        <p>Let's look at how to find all of the factors of {{$num1}} and list them out.</p>
                    </div>
                </div>
                <div class="row">
                    <p class="h2 col-12 " style="color:black;  ">How to Find the Factors of {{$num1}}</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>We just said that a factor is a number that can be divided equally into {{$num1}}. So the way you find and list all of the factors of {{$num1}} is to go through every number up to and including {{$num1}} and check which numbers result in an even quotient (which means no decimal place)..
                        </p>
                        <p>Doing this by hand for large numbers can be time consuming, but it's relatively easy for a computer program to do it. Our calculator has worked this out for you. Here are all of the factors of {{$num1}}:</p>
                    </div>
                </div>
                @for($i=1;$i<=$num1;$i++)
                    <div class="row">
                        @if($num1% $i ==0)
                            <p class="fs-4">
                                <span>•</span> {{$num1}} ÷ {{$i}} = {{$num1/$i}}
                            </p>
                        @endif
                    </div>
                @endfor
                <div class="row">
                    <div class="col-11">
                        <p>All of these factors can be used to divide {{$num1}} by and get a whole number. The full list of positive factors for {{$num1}} are:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @for($i=$num1;$i>=1;$i--)
                            @if($num1%$i ==0)
                                {{$num1/$i}},
                            @endif
                            @if($i==2)  
                                and
                            @endif  
                        @endfor
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 h2">
                        <p>Negative Factors of {{$num1}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <p>Technically, in math you can also have negative factors of {{$num1}}. If you are looking to calculate the factors of a number for homework or a test, most often the teacher or exam will be looking for specifically positive numbers.</p>
                        <p>
                            However, we can just flip the positive numbers into negatives and those negative numbers would also be factors of {{$num1}}:
                        </p>
                        @for($i=$num1;$i>=1;$i--)
                            @if($num1%$i ==0)
                                -{{$num1/$i}},
                            @endif
                            @if($i==2)  
                                and
                            @endif  
                        @endfor
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <h2>How Many Factors of {{$num1}} Are There?</h2>
                        <p>As we can see from the calculations above there are a total of <span id="count"></span> positive factors for {{$num1}} and <span id="count"></span> negative factors for {{$num1}} for a total of <span id="total-count"></span> factors for the number {{$num1}}.</p>
                        <p>There are <span id="count"></span> positive factors of {{$num1}} and <span id="count"></span> negative factors of {{$num1}}. Wht are there negative numbers that can be a factor of {{$num1}}?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <h2>Factor Pairs of {{$num1}}?</h2>
                        <p>A factor pair is a combination of two factors which can be multiplied together to equal {{$num1}}. For {{$num1}}, all of the possible factor pairs are listed below:</p>
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
                <div class="row py-4">
                    <div class="col-12">
                        <p>Just like before, we can also list out all of the negative factor pairs for {{$num1}}:</p>
                        @for($i=1;$i<=$num1;$i++)
                            @if($num1%$i==0)
                                <div class="row">
                                    <div class="col-8">
                                    <span class="px-3">•</span>-{{$i}} x -{{$num1/$i}} = {{$num1}}
                                </div>
                                 </div>
                            @endif    
                        @endfor
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Notice in the negative factor pairs that because we are multiplying a minus with a minus, the result is a positive number.</p>
                        <p>So there you have it. A complete guide to the factors of {{$num1}}. You should now have the knowledge and skills to go out and calculate your own factors and factor pairs for any number you like.</p>
                        <p>Feel free to try the calculator below to check another number or, if you're feeling fancy, grab a pencil and paper and try and do it by hand. Just make sure to pick small numbers!</p>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-12">
                        <h1>Factors Calculator</h1>
                        <p>Want to find the factor for another number? Enter your number below and click calculate.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <form class="form-bg" action="{{ url('/factor')}}" method="post">
                            @csrf
                            <div class="h4 text-light">Find the Factor </div>
                            <hr>
                            <div class="row">
                                    <div class="col-12">
                                        <span>Enter a number </span>
                                        <input class="effect-2" name="num1" id="num1" oninput="calculate()" type="text" placeholder="">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <button type="submit"  class="btn btn-color"
                                            style="width: 100%;">Calculate Factor</button>
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
        var count=0;
        for(var num=1; num<={{$num1}};num++){
            if({{$num1}}%num == 0){
                count++;
            }
        }
        document.getElementById("count").textContent = count;
        document.getElementById("total-count").textContent = count*2;
    }
</script>
@include('math.math-scripts')
</html>
