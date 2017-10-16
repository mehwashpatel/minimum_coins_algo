<h1>You now have a special 53 cent coin in your arsenal(array)</h1>
<div id="result"></div>
<script>
var coinsArray = [1, 5, 10,25, 53, 100, 200];
var amount = 132;
var totalCoins = amount;
function countCoins(coinsArray, amount, totalCoins){
	for(i=0;i<coinsArray.length;i++){
		let currentArray = coinsArray.slice(0,i+1).sort(function(a,b){return b-a});
		let tempVal = getNumberOfCoins(currentArray, amount, 0);
		totalCoins = tempVal < totalCoins ? tempVal : totalCoins;
	}
	return totalCoins;
}


document.getElementById('result').innerHTML = '<br>Minimum coins for '+53+' is '+countCoins(coinsArray, 53, 53);
document.getElementById('result').innerHTML += '<br>Minimum coins for '+653+' is '+countCoins(coinsArray,653,653);
document.getElementById('result').innerHTML += '<br>Minimum coins for '+63+' is '+countCoins(coinsArray,63,63);
document.getElementById('result').innerHTML += '<br>Minimum coins for '+amount+' is '+countCoins(coinsArray, amount, totalCoins);

function getNumberOfCoins(currentArray, amount, totalCoins){
	
	if(amount<=0){
		return totalCoins;
	}else if(amount >=currentArray[0]){
		totalCoins++;
		return getNumberOfCoins(currentArray, amount-currentArray[0], totalCoins);
		// return countCoins(currentArray, amount-currentArray[0], 0, totalCoins);
	}else{
		var tempArray = currentArray.slice(0);
		tempArray.shift();
		return getNumberOfCoins(tempArray, amount, totalCoins);
		// return countCoins(currentArray, amount-currentArray[0], totalCoins);
	}
}
</script>