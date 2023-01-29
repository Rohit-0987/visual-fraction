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

<body onload="clear_input()">
    @include('navbar')
    <div class="manual-container w-full mt-md-5 mt-3">
        <div class="row">
            <p class="col-12 h1">Least Common Multiple Calculator (LCD)</p>
            <p class="col-12 fs-5">Simple, powerful calculator to find the least common multiple for a set of whole numbers.</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <form class="form-bg" action="{{ url('/fact') }}" method="post">
                    @csrf
                    <div class="h4 text-light">Find the LCM</div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <span>Enter values seperated by spaces</span>
                            <input class="effect-2" name="num1" id="num1" value="" type="text"
                                placeholder="">
                        </div>
                        <div class="col-6 mt-2">
                            <button type="button" class="btn btn-color" onclick="calculate()"
                                style="width: 100%;">Calculate</button>
                        </div>
                        <div class="col-6 mt-2">
                            <button type="button" onclick="clear_input()" class="btn btn-color"
                                style="width: 100%;">Clear</button>
                        </div>
                        <div class="col-12" id="hide-data">
                            <h5>Answer</h5>
                            <h5>LCM = <span id="result"> </span></h5>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 col-12 mt-md-0 mt-2">
                <div class="h3">How to use</div>
                <p>It's really simple. Just enter two or more whole numbers separated by spaces into the input on the left and click "Calculate".</p>
                <p>The calculator will work out the least common multiple and also list out the solution for you.
                </p>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="">Popular List of LCM Examples</h2>
                </div>
                <div class="col-12">
                    <p>Here are some of the mostly commonly searched for LCM problems for you to enjoy:</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                @for ($num1 = 1; $num1 <= 99; $num1++)
                    @for ($num2 = 2; $num2 <= 100; $num2++)
                        
                        <a href="/least-common-multiple/lcm-of-{{$num1}}-and-{{$num2}}"
                            class="col-md-4 col-sm-6 col-12 text-center my-2">
                            What is the LCM of {{$num1}} and {{$num2}}?
                        </a>
                    @endfor
                @endfor
            </div>
        </div>
    </div>
    @include('math.math-footer')
</body>
<script>
    var numbersArray = [];
    
    function calculate() {
        submitForm();
        let lcm = findLcm(numbersArray)
        if (numbersArray.length > 2) {
            document.getElementById("hide-data").style.display = "block"
            document.getElementById("result").textContent = lcm
        }
    }

    function submitForm() {
        let input = document.getElementById("num1").value;
        let inputArray = input.split(" ");
        for (let i = 0; i < inputArray.length; i++) {
            numbersArray.push(Number(inputArray[i]));
        }
    }

    function findLcm(list) {
        let lcm = 1;
        let gcd;
        for (let i = 0; i < list.length; i++) {
            let a = list[i];
            let b = lcm;
            gcd = findGcd(a, b);
            lcm = (a * b) / gcd;
        }
        return lcm;
    }

    function findGcd(a, b) {
        if (!b) {
            return a;
        }
        return findGcd(b, a % b);
    }

    function clear_input() {
        document.getElementById("hide-data").style.display = "none";
        numbersArray.length = 0;
        document.getElementById("num1" ).value =""

    }
</script>
@include('math.math-scripts')

</html>
