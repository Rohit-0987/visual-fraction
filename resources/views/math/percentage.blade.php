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

	<div class="container">
		<div class="row mt-5">
			<div class="col-md-9 col-12">
				<div>
					<span class="h2">Percentage Calculator</span>
					<p style="font-size: 1.15rem;color:#0a4b78 " class="mt-3">
						A quick and easy percentage calculator that will let you work out any percentage you might need. All you have to do is a pick one of the three options below, enter your numbers, and the calculator will automatically work out the answer for you.
					</p><hr>
                    <div class="row my-3">
                        <div class="col-md-12 col-12">
                            <form class="form-bg" >
                                <div class="row  ">
                                    <div class="col-md-1  col-12 gx-0 px-0">
                                        <p  style="text-align: center">what is</p>
                                    </div>
                                    <div class="col-md-2 col-12 gx-2 px-2 ">
                                        <input class="effect-2"  name="num3" oninput="calculate()" id="num1" type="number" placeholder="">
                                    </div>
                                    <div class="col-md-1 col-12 gx-0 px-0">
                                        <p style="text-align: center">%  of</p>
                                    </div>
                                    <div class="col-md-2 col-12 gx-2 px-2">
                                        <input class="effect-2"  name="num2" oninput="calculate()" id="num2" type="number" placeholder="">
                                    </div>
                                    <div class="col-md-3 py-3" style="border-right: 0.5px solid grey">
                                    </div>
                                    <div class="col-md-2" >
                                        <input class="effect-2 " style="background-color:#b8e6bf" readonly name="res" id="res" type="number" placeholder="">
                                    </div>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-12 col-12">
                            <form class="form-bg" >
                                <div class="row  ">
                                    <div class="col-md-2 col-12 gx-2 px-2 ">
                                        <input class="effect-2" oninput="calculate2()" name="num3" id="num3" type="number" placeholder="">
                                    </div>
                                    <div class="col-md-2 col-12 gx-0 px-0">
                                        <p style="text-align: center">is what % of</p>
                                    </div>
                                    <div class="col-md-2 col-12 gx-2 px-2">
                                        <input class="effect-2" name="num4" oninput="calculate2()" id="num4" type="number" placeholder="">
                                    </div>
                                    <div class="col-md-3 py-3" style="border-right: 0.5px solid grey">
                                    </div>
                                    <div class="col-md-2" >
                                        <input class="effect-2 " style="background-color:#b8e6bf" readonly name="res1" id="res1" type="number" placeholder="">
                                    </div>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-12 col-12">
                            <form class="form-bg" >
                                <div class="row  ">
                                    <div class="col-md-4  col-12 gx-0 px-0">
                                        <p  style="text-align: center">What is the % change from</p>
                                    </div>
                                    <div class="col-md-2 col-12 gx-0 px-0 ">
                                        <input class="effect-2" oninput="calculate3()" name="num5" id="num5" type="number" placeholder="">
                                    </div>
                                    <div class="col-md-1 col-12 gx-0 px-0">
                                        <p style="text-align: center">to</p>
                                    </div>
                                    <div class="col-md-2 col-12 gx-0 px-0">
                                        <input class="effect-2" oninput="calculate3()" name="num6" id="num6" type="number" placeholder="">
                                    </div>
                                    <div class="col-md-1 " style="border-right: 0.5px solid grey">
                                        
                                    </div>
                                    <div class="col-md-2" >
                                        <input class="effect-2 " style="background-color:#b8e6bf" readonly name="res2" id="res2" type="number" placeholder="">
                                    </div>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>There are many, many (many) percentage calculators on the web and most of them do the exact same thing: calculate percentages. With our calculator we have tried to make it as simple and as easy to use as we possibly can.</p>
                            <p>The calculator is designed to be used by students, teachers, parents, and anybody who needs to quickly work out the percentage of two numbers without having to figure it out manually.</p>
                            <p>One thing that most other percentage calculators don't do is actually explain how it's worked out. Since Visual Fractions is really an education and math website, we feel like it's our duty to not only provide the answer but to also explain the math behind it.</p>
                            <p>This makes our tool the perfect choice for students who most likely are going to need to calculate a lot of percentages during their time at school. With the Visual Fractions percentage calc, you can actually teach them the why behind the answer so that they can go on to calculate their own percentages manually.</p>
                            <p>Note: If you want to view the explanation for how a certain percentage is calculated, just click the 
                                icon next to the answer. Every calculation is fully broken down and explained for you so that you can learn the math behind percentages.</p>
                            <p>The calculation is pretty simple, but if you have any problems or get any errors, please contact us.</p>    
                            <h2>Example Percentage Problems</h2>
                            <p>If you have the time and want to learn more about calculating percentages, you can browse the following example problems to get a deeper understanding of the math behind them.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>What is x% of y?</h6>
                            @for($nume1 = 1; $nume1 <= 30; $nume1++)
                            
                            <a href="percentage/what-is-{{ $num1 =random_int(1,100)}}-percent-of-{{ $num2 =random_int(101,1000)}}"> <p>What is {{$num1}}% of {{$num2}}?</p></a>
                            @endfor
                        </div>
                        <div class="col-md-4"><h6>X is what % of y?</h6>
                            @for($nume1 = 1; $nume1 <= 30; $nume1++)
                            <a href="percentage/{{ $num1 =random_int(1,1000)}}-is-what-percent-of-{{ $num2 =random_int(101,2000)}}"> <p> {{$num1}} is what percent of {{$num2}}?</p></a>
                            @endfor
                        </div>
                        <div class="col-md-4"><h6>% increase from x to y</h6>
                            @for($nume1 = 1; $nume1 <= 30; $nume1++)
                            <a href="percentage/what-is-percentage-difference-from-{{ $num1 =random_int(1,1000)}}-to-{{ $num2 =random_int(101,2000)}}"> <p>% change from {{$num1}}to {{$num2}}?</p></a>
                            @endfor
                        </div>
                    </div>
				</div>
			</div>
			<div class="col-md-3 col-12">
				@include('math.right-section-math')
			</div>

		</div>
	</div>

	@include('math.math-footer')
</body>
<script>
    function calculate(){
        var num1 = parseFloat(document.getElementById('num1').value);
        var num2 = parseFloat(document.getElementById('num2').value);
        if(!num1 ||!num2){
        }
        else{
            var  res = ((num2/100)*num1);
            document.getElementById('res').value = res.toFixed(2);
        }
        
    }

    function calculate2(){
        var num3 = parseFloat(document.getElementById('num3').value);
        var num4 = parseFloat(document.getElementById('num4').value);
        if(!num3 ||!num4){
        }
        else{
            console.log("hi")
            var  res1 = ((num3/num4)*100);
            document.getElementById('res1').value = res1.toFixed(2);
        }
    }

    function calculate3(){
        var num5 = parseFloat(document.getElementById('num5').value);
        var num6 = parseFloat(document.getElementById('num6').value);
        if(!num5 ||!num6){
        }
        else{
            var  res2 = (((num6-num5)/num5)*100);
            document.getElementById('res2').value = res2.toFixed(2);
        }
    }
</script>
@include('math.math-scripts')
</html>