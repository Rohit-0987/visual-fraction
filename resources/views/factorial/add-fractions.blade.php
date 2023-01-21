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
	<div class="manual-container w-full mt-md-5 mt-3">
        <div class="row">
            <p class="col-12 h1">Add Fractions Calculator</p>
            <p class="col-12 fs-5">Simple, powerful calculator to add two fractions together.</p>
        </div>

        <form class="form-bg" >
            <div class="h4 text-light">Fraction + Fraction </div><hr>
            <div class="row">
                <div class="col-md-4 col-5">
                    <div class="">
                        <input class="effect-2" name="num1" id="num1" type="number" placeholder="Numerator">
                        <hr>
                        <input class="effect-2" name="deno1" id="deno1" type="number" placeholder="Denominator">
                    </div>
                </div>
                <div class="col-md-1 col-2">
                    <div class="text-center">
                        <select name="operation" class="mt-5">
                            <option value="add">+</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-5">
                    <div class="">
                        <input class="effect-2" name="num2" id="num2" type="number" placeholder="Numerator">
                        <hr>
                        <input class="effect-2" name="deno2" id="deno2" type="number" placeholder="Denominator">
                    </div>
                </div>
                <div class="col-md-3 col-12 mt-md-0 mt-5">
                    <div class="">
                        <input class="effect-2" name="answer" id="answer" type="text" placeholder="Answer">
                    </div>
                    <hr>
                    <div class="mt-3">
                        <button type="button" onclick="calculate()" class="btn btn-color" style="width: 100%;">Calculate</button>
                    </div>
                </div>
            </div>
        </form>
            
        <div class="row mt-4">
            <div class="h3">How to use</div>
            <p>I mean, do we really need to explain how this calculator works? You enter the first fraction, you enter the second fraction, click "Calculate" and hey presto, you get the answer.</p>

            <p>You can also click the little icon after the calculator to find out more information about the process of subtracting one fraction from another. (Note: you need to have performed a calculation first or the link won't work!)</p>
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
                            <a href="add-fractions/add-fract-{{$nume1}}-{{$deno1}}-plus-{{$nume2}}-{{$deno2}}" class="col-md-4 col-sm-6 col-12 text-center my-2">
                                What is {{$nume1}}/{{$deno1}} plus {{$nume2}}/{{$deno2}}
                            </a>
                        @endfor
                    @endfor
                @endfor
            @endfor
        </div>
    </div>

	@include('factorial.factorial-footer')
</body>
<script>
    function calculate() {
        var num1 = document.getElementById('num1').value;
        var deno1 = document.getElementById('deno1').value;
        var num2 = document.getElementById('num2').value;
        var deno2 = document.getElementById('deno2').value;
        var numerator = ((num1 * deno2) + (num2 * deno1));
        var denomerator = (deno1 * deno2);
        var m = Math.min(numerator, denomerator);
        for(i = m; i > 0; i--) {
            if(numerator % i == 0 && denomerator % i == 0) {
                numerator = numerator / i;
                denomerator = denomerator / i;
            }
        }
        var ans = numerator + "/" + denomerator;
        document.getElementById('answer').value = ans;
    }
</script>
@include('factorial.factorial-scripts')
</html>