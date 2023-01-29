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
                    <h1 class="col-12 my-4 h2">What is the Least Common Multiple (LCM) of {{ $num1 }} and
                        {{ $num2 }}?</h1>
                    <h4 class="col-12 my-4" style="color: #0a4b78;  ">
                        If you are searching to find out what the lowest common multiple of {{ $num1 }} and
                        {{ $num2 }} is then you probably figured out you are in the right place! That's exactly
                        what this quick guide is all about. We'll walk you through how to calculate the least common
                        multiple for any numbers you need to check. Keep reading!</h4>
                    <p>First off, if you're in a rush, here's the answer to the question <span class="h3"> "what is
                            the LCM of {{ $num1 }} and {{ $num2 }}?":</span></p>
                    <h2>LCM({{ $num1 }}, {{ $num2 }}) = <span id="lcm"></span></h2>
                </div>
                <div class="row">
                    <div class="col-12 mt-4">
                        <h2>What is the Least Common Multiple?</h2>
                        <p>In simple terms, the LCM is the smallest possible whole number (an integer) that divides
                            evenly into all of the numbers in the set. It's also sometimes called the least common
                            divisor, or LCD.</p>
                        <p>There are a number of different ways to calculate the GCF of a set of numbers depending how
                            many numbers you have and how large they are.</p>
                        <p>For smaller numbers you can simply look at the factors or multiples for each number and find
                            the least common multiple of them.</p>
                        <p>For {{ $num1 }} and {{ $num2 }} those factors look like this:</p>
                        <ul>
                            <li>Factors for {{ $num1 }}: <span id="factors1"></span> </li>
                            <li>Factors for {{ $num2 }}: <span id="factors2"></span></li>
                        </ul>
                        <p>As you can see when you list out the factors of each number, <span id="lcm2"></span> is
                            the
                            greatest number that {{ $num1 }} and {{ $num2 }} divides into.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>Prime Factors</h2>
                        <p>As the numbers get larger, or you want to compare multiple numbers at the same time to find
                            the GCF, you can see how listing out all of the factors would become too much. To fix this,
                            you can use prime factors.</p>
                        <p>List out all of the prime factors for each number:</p>
                        <ul>
                            <li>Prime Factors for {{ $num1 }}: <span id="prime1"></span> </li>
                            <li>Prime Factors for {{ $num2 }}: <span id="prime2"></span> </li>
                        </ul>
                        <p>Now that we have the list of prime factors, we need to list out all of the prime factors as
                            often as they occur for each given number and then multiply them together. In our example,
                            this becomes:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>LCM = <span id="output"></span> = <span id= "lcm3"></span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-4">
                        <h1>Other Ways to Calculate LCM</h1>
                        <p>There are a number of other ways in which you can calculate the least common multiple of
                            numbers, including:</p>
                        <ul>
                            <li>Prime factorization using exponents</li>
                            <li>The cake/ladder method</li>
                            <li>The division method</li>
                            <li>Using the greatest common factor (GCF)</li>
                        </ul>
                        <p>For the purposes of this tutorial, using factors or prime factors should help you to
                            calculate the answer easily. If you really want to brush up on your math, you can research
                            the other methods and become a full blown LCM expert.</p>
                        <p>Hopefully you've learned a little math today (but not too much!) and understand how to
                            calculate the LCM of numbers. The next challenge is to pick a couple of new numbers yourself
                            and try to work it out using the above methods.</p>
                        <p>Not feeling like doing the hard work? No worries! Head back to our <a
                                href="/least-common-multiple">LCM calculator</a> instead and let our tool do the hard
                            work for you :)</p>
                    </div>
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
                    @for ($i = 1; $i <= 99; $i++)
                        @for ($j = 2; $j <= 100; $j++)
                            <a href="/least-common-multiple/lcm-of-{{ $i }}-and-{{ $j }}"
                                class="col-md-4 col-sm-6 col-12 text-center my-2">
                                What is the LCM of {{ $i }} and {{ $j }}?
                            </a>
                        @endfor
                    @endfor
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
    var num1 = {{ $num1 }};
    var num2 = {{ $num2 }};

    function calculate() {
        let numbers = [num1, num2]
        let result = findLcm(numbers);
        document.getElementById("lcm").textContent = result;
        document.getElementById("lcm2").textContent = result;

        let factor_list = findLcmFactors(num1, num2);
        document.getElementById("factors1").textContent = factor_list;
        document.getElementById("factors2").textContent = factor_list;
        document.getElementById("prime1").textContent = findPrimeFactors(num1);
        document.getElementById("prime2").textContent = findPrimeFactors(num2);
        let num1_prime = findPrimeFactors(num1);
        let num2_prime = findPrimeFactors(num2);

        let num1UniqueArray = num1_prime.filter((item, index) => num1_prime.indexOf(item) === index);
        let num2UniqueArray = num2_prime.filter((item, index) => num2_prime.indexOf(item) === index);

        let combinedArray = [...num1UniqueArray, ...num2UniqueArray];


        var output = document.getElementById("output");
        for (var i = 0; i < combinedArray.length; i++) {
            if(i<combinedArray.length-1)
                output.innerHTML += combinedArray[i] + " X ";
            else
            output.innerHTML += combinedArray[i];
        }
        var res =1;
        for(var i=0;i<combinedArray.length;i++){
            res = res * combinedArray[i];
        }
        document.getElementById("lcm3").textContent = res;
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

    function findGcd(a, b) {
        if (!b) {
            return a;
        }
        return findGcd(b, a % b);
    }

    function findLcmFactors(a, b) {
        let lcm = (a * b) / findGcd(a, b);
        let factors = new Set();
        for (let i = 1; i <= lcm; i++) {
            if (lcm % i === 0) {
                factors.add(i);
            }
        }
        return Array.from(factors);
    }

    function findPrimeFactors(n) {
        let factors = new Set();
        for (let i = 2; i <= n; i++) {
            while (n % i === 0) {
                factors.add(i);
                n /= i;
            }
        }
        return Array.from(factors);
    }
</script>
@include('math.math-scripts')

</html>
