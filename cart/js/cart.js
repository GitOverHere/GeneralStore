class Cart extends React.Component {
	contructor(super){
		super(props)
	    this.setState {
			productCount: this.props.productCount,
			products: this.props.products,
			loading: true
		}	
		
	}
	
	componentDidMount(){
		
		
		
		x = document.getElementById("uuid").innerText
		fetch('endpoint/cart.php?sessionid=').then(item => {
			
			
			
		}).then()
		
		
	}
	
	
	
	
}


class Item extends React.Component{
	constructor(super){
		super(props)
		this.setState {
		 id: this.props.productCount,
         item_image: this.props.item_image,         
         price: this.props.price,
         quantity: this.props.price 
		}
	}
	
	render(){
		
	if()
	  return()	
		
		
	}
	
}





	
	
	
	
	
	
	







ReactDOM.render(



,document.querySelector('cart'))