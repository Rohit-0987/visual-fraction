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
            <p class="col-12 h1">Greatest Common Factor Calculator</p>
            <p class="col-12 fs-5">Find the greatest common factor of two or more whole numbers.</p>
        </div>
        <div class="row">
            <div class="col-md-8 col-12">
                <form class="form-bg" action="{{ url('/fact') }}" method="post">
                    @csrf
                    <div class="h4 text-light">Find the GCF</div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <span>Enter 2-10 whole numbers seperated by spaces</span>
                            <input class="effect-2" name="num1" id="num1" value="" type="text" placeholder="">
                        </div>
                        <div class="col-6 mt-2">
                            <button type="button" class="btn btn-color" onclick="calculate()"
                                style="width: 100%;">Calculate</button>
                        </div>
                        <div class="col-6 mt-2">
                            <button type="button" onclick="clear_input()" class="btn btn-color"
                                style="width: 100%;">Clear</button>
                        </div>
                        <div class="col-6 mt-2">
                            <h5>Answer</h5>
                            <h5>GCF = <span id="result"> </span></h5>
                            <div id="output"> </div>
                        </div>
                        <div class="col-12 mt-4">
                            <h5>Factors</h5>
                            <div id="output2"> </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-12 mt-md-0 mt-2">
                <div class="h3">How to use</div>
                <p>It's really simple. Just enter two or more whole numbers separated by spaces into the input on the
                    left and click "Calculate".</p>
                <p>The calculator will work out the greatest common factor and also list out the factors for each number
                    you add.
                </p>
            </div>
        </div>
    </div>
    @include('math.math-footer')
</body>
<script>
    let numbersArray = [];
    function calculate() {
        submitForm();
        var output = document.getElementById("output");
        output.innerHTML += "for ";
        for (var i = 0; i < numbersArray.length; i++) {
            output.innerHTML += numbersArray[i] + ",";
        }
        factor();
    }

    function factor() {
        var output = document.getElementById("output2");
        for (var i = 0; i < numbersArray.length; i++) {
            output.innerHTML += "The factors of " + numbersArray[i] + " are " + findFactors(numbersArray[i]) + "<br>";
        }
    }

    function submitForm() {
        let input = document.getElementById("num1").value;
        let inputArray = input.split(" ");
        for (let i = 0; i < inputArray.length; i++) {
            numbersArray.push(Number(inputArray[i]));
        }
        let gcf = findGCF(numbersArray);
        document.getElementById("result").textContent = gcf
    }

    function findGCF(numbers) {
        let gcf = numbers[0];
        for (let i = 1; i < numbers.length; i++) {
            gcf = gcd(gcf, numbers[i]);
        }
        return gcf;
    }

    function gcd(a, b) {
        if (b === 0) return a;
        return gcd(b, a % b);
    }

    function findFactors(num) {
        var factors = [];
        for (var i = 1; i <= num; i++) {
            if (num % i === 0) {
                factors.push(i);
            }
        }
        return factors;
    }
    function clear_input(){
        console.log("hii");
        document.getElementById("num1").value =" ";
    }
</script>
@include('math.math-scripts')

</html>
