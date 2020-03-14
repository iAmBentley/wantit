class Item {
	static all() {
		return axios.get('items-list')
	}
}

export default Item;