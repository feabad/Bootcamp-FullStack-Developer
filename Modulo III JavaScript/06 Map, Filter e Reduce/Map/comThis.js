const orange = {
	price: 2,
};

const apple = {
	price: 1.5,
};

function mapArray(arr, thisArg) {
	return arr.map(function (item) {
		return item * this.price;
	}, thisArg);
}

const array = [1, 2, 3, 4, 5];

console.log('this -> orange', mapArray(array, orange));

console.log('this -> apple', mapArray(array, apple));

