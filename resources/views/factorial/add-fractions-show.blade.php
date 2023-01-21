<!doctype html>
<html>
<head>
  	@include('links')
	<style>
        a {
            text-decoration: none; 
            color: inherit;
        }
	</style>
</head>
<body>
	@include('navbar')
	<div class="container w-full mt-md-5 mt-3">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <p class="col-12 h1">How to Calculate {{$nume1}}/{{$deno1}} Plus {{$nume2}}/{{$deno2}} </p>
                    <p class="col-12 fs-5 mt-2">
                        Are you looking to work out and calculate how to add {{$nume1}}/{{$deno1}} plus {{$nume2}}/{{$deno2}}? In this really simple guide, we'll teach you exactly what {{$nume1}}/{{$deno1}} + {{$nume2}}/{{$deno2}} is and walk you through the step-by-process of how to add two fractions together.
                    </p>
                    <p class="col-12 fs-5 mt-3">
                        To start with, the number above the line in a fraction is called a numerator and the number below the line is called the denominator.
                    </p>
                    <p class="col-12 fs-5 mt-3">
                        Why do you need to know this? Well, because the easiest way to add fractions together is to make sure both fractions have the same denominator.
                    </p>
                    <p class="col-12 fs-5 mt-3">
                        Let's set up {{$nume1}}/{{$deno1}} and {{$nume2}}/{{$deno2}} side by side so they are easier to see:
                    </p>
                    <p class="col-12 fs-5 mt-3">
                        <div class="row text-center fs-3 fw-bold">
                            <div class="col-md-2 col-3">
                                <div class="border-3 border-bottom border-dark">{{$nume1}}</div>
                                <div class="">{{$deno1}}</div>
                            </div>
                            <div class="col-1 my-auto">
                                +
                            </div>
                            <div class="col-md-2 col-3">
                                <div class="border-3 border-bottom border-dark">{{$nume2}}</div>
                                <div class="">{{$deno2}}</div>
                            </div>
                        </div>
                    </p>
                    
                    <?php 
                        $num1 = $deno1;
                        $num2 = $deno2;
                        $lcm = ($num1<$num2) ? $num1 : $num2;
                        while(1){
                            if($lcm%$num1==0 && $lcm%$num2==0){
                                //echo "LCM of " .$num1. " and " .$num2. " is: ".$lcm. "<br>";
                                //echo $num1 = $lcm / $deno1. "<br>";
                                //echo $num2 = $lcm / $deno2;
                                break;
                            }
                            $lcm += 1;
                        }
                    ?>
                    <p class="col-12 fs-5 mt-3">
                        Our denominators are {{$deno1}} and {{$deno2}}. What we need to do is find the lowest common denominator of the two numbers, which is {{$lcm}} in this case.
                    </p>
                    <p class="col-12 fs-5 mt-3">
                        If we multiply the first denominator ({{$deno1}}) by {{$num2}} we will get {{$lcm}}. If we we multiply the second denominator ({{$deno2}}) by {{$num1}} we will also get 16933. We also need to multiply the numerators above the line by the same amounts so that the fraction values are correct:
                    </p>

                    <p class="col-12 fs-5 mt-3">
                        <div class="row text-center fs-3 fw-bold">
                            <div class="col-md-2 col-5">
                                <div class="border-3 border-bottom border-dark">{{$nume1}} x {{$num2}}</div>
                                <div class="">{{$deno1}} x {{$num2}}</div>
                            </div>
                            <div class="col-1 my-auto">
                                +
                            </div>
                            <div class="col-md-2 col-5">
                                <div class="border-3 border-bottom border-dark">{{$nume2}} x {{$num1}}</div>
                                <div class="">{{$deno2}} x {{$num1}}</div>
                            </div>
                        </div>
                    </p>

                    <p class="col-12 fs-5 mt-3">
                        This is what {{$nume1}}/{{$deno1}} Plus {{$nume2}}/{{$deno2}} looks like with the same denominator
                    </p>

                    <p class="col-12 fs-5 mt-3">
                        <div class="row text-center fs-3 fw-bold">
                            <div class="col-md-2 col-3">
                                <div class="border-3 border-bottom border-dark">{{$nume1 * $num2}}</div>
                                <div class="">{{$deno1 * $num2}}</div>
                            </div>
                            <div class="col-1 my-auto">
                                +
                            </div>
                            <div class="col-md-2 col-3">
                                <div class="border-3 border-bottom border-dark">{{$nume2 * $num1}}</div>
                                <div class="">{{$deno2 * $num1}}</div>
                            </div>
                        </div>
                    </p>
                    <p class="col-12 fs-5 mt-3">
                        Now that these fractions have been converted to have the same denominator, we can add the result together to make one fraction:
                    </p>

                    <p class="col-12 fs-5 mt-3">
                        <div class="row text-center fs-3 fw-bold">
                            <div class="col-md-3 col-8">
                                <div class="border-3 border-bottom border-dark">{{$nume1 * $num2}} + {{$nume2 * $num1}}</div>
                                <div class="">{{$deno1 * $num2}}</div>
                            </div>
                            <div class="col-1 my-auto">
                                =
                            </div>
                            <div class="col-md-2 col-3">
                                <div class="border-3 border-bottom border-dark">{{($nume1 * $num2) + ($nume2 * $num1)}}</div>
                                <div class="">{{$deno2 * $num1}}</div>
                            </div>
                        </div>
                    </p>
                    <p class="col-12 fs-5 mt-3">
                        You're done! You now know exactly how to calculate {{$nume1}}/{{$deno1}} + {{$nume2}}/{{$deno2}}. Hopefully you understood the process and can use the same techniques to add other fractions together. The complete answer is below (simplified to the lowest form):
                    </p>
                    <?php
                        $numerator = ($nume1 * $num2) + ($nume2 * $num1);
                        $denominator = $deno2 * $num1;
                        //echo $min;
                        for($i = $numerator; $i > 1; $i--) {
                            if($i % $denominator == 0) {
                                break;
                            }
                        }
                    ?>
                    
                    <p class="col-12 fs-5 mt-3">
                        <div class="row fs-3 fw-bold">
                            <div class="col-md-1 text-end col-5">
                                <div class="">{{$i / $denominator}}</div>
                            </div>
                            <div class="col-md-1 text-start col-5">
                                <div><span class="border-3 border-bottom border-dark"> {{$numerator - $i}}</span></div>
                                <div class="">{{$denominator}}</div>
                            </div>
                        </div>
                    </p>
                    <p class="col-12 fs-5 mt-3 fst-italic">
                        Note: since the numerator is greater than the denominator in this example, we've simplified it into a mixed fraction.
                    </p>

                    <p class="col-12 h1">Convert {{$nume1}}/{{$deno1}} plus {{$nume2}}/{{$deno2}} to Decimal</p>
                    <p class="col-12 fs-5 mt-3">
                        Here's a little bonus calculation for you to easily work out the decimal format of the fraction we calculated. All you need to do is divide the numerator by the denominator and you can convert any fraction to decimal:
                    </p>
                    <p class="col-12 fs-5 mt-3">
                        <div class="row text-center fs-3 fw-bold">
                            <div class="col-md-2 col-4">
                                <div><span class="border-3 border-bottom border-dark px-3">{{$numerator}}</span></div>
                                <div class="">{{$denominator}}</div>
                            </div>
                            <div class="col-1 my-auto">
                                =
                            </div>
                            <div class="col-md-2 col-3 my-auto">
                                <?php 
                                    $number = $numerator / $denominator;
                                    $english_format_number = number_format($number, 4, '.', ''); 
                                ?>
                                <div class="">{{$english_format_number}}</div>
                            </div>
                        </div>
                    </p>

                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <p class="h2">Preset List of Fraction Addition Examples</p>
                    </div>
                    <div class="col-12">
                        <p>Below are links to some preset calculations that are commonly searched for:</p>
                    </div>
                </div>
                <div class="row">
                    @for($nume1 = 1; $nume1 <= 10; $nume1++)
                        @for($deno1 = 2; $deno1 <= 10; $deno1++)
                            @if($nume1 >= $deno1)
                                @continue
                            @endif
                            @for($nume2 = 1; $nume2 <= 10; $nume2++)
                                @for($deno2 = 2; $deno2 <= 10; $deno2++)
                                    @if($nume2 >= $deno2)
                                        @continue
                                    @endif
                                    <a href="/add-fractions/add-fract-{{$nume1}}-{{$deno1}}-plus-{{$nume2}}-{{$deno2}}" class="col-lg-4 col-md-6 col-sm-6 col-12 text-center my-2">
                                        What is {{$nume1}}/{{$deno1}} plus {{$nume2}}/{{$deno2}}
                                    </a>
                                @endfor
                            @endfor
                        @endfor
                    @endfor
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
				@include('factorial.right-section-factorial')
            </div>
        </div>
    </div>

	@include('factorial.factorial-footer')
</body>
<script>
    
</script>
@include('factorial.factorial-scripts')
</html>