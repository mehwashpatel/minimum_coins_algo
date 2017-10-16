<h1>Given the coins 1, 5, 10, 25, 100, 200, what is the minimum number of coins needed to make change for x? For instance if you need to make change for 53 cents you need five coins, two quarters (25 cents), and three pennies (1 cent). You have an infinite number of coins to dispense change with.</h1>
<div id="result"></div>
<script>
const coinsArray = [1, 5, 10, 25, 100, 200];

coinsArray.sort(function(a, b){return b-a}); //sort srray in descending order

function getNumberOfCoins(coinsArray, amount, totalCoins){
	
	const answer = amount <= 0 ? totalCoins :
				amount >= coinsArray[0] ? incrCoins(coinsArray,amount,totalCoins) :
				decrArray(coinsArray,amount,totalCoins);
	
	return answer;
}

function incrCoins(coinsArray,amount,totalCoins){
	totalCoins++;
	return getNumberOfCoins(coinsArray, amount-coinsArray[0], totalCoins);
}

function decrArray(coinsArray,amount,totalCoins){
	var tempArray = coinsArray.slice(0);//.shift();
	tempArray.shift();
	return getNumberOfCoins(tempArray, amount, totalCoins);
}

document.getElementById('result').innerHTML = 'Minimum coins for '+53+' is '+getNumberOfCoins(coinsArray,53,0);
document.getElementById('result').innerHTML += '<br>Minimum coins for '+653+' is '+getNumberOfCoins(coinsArray,653,0);
document.getElementById('result').innerHTML += '<br>Minimum coins for '+63+' is '+getNumberOfCoins(coinsArray,63,0);
document.getElementById('result').innerHTML += '<br>Minimum coins for '+132+' is '+getNumberOfCoins(coinsArray,132,0);
</script>
