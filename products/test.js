class NoReviews extends React.Component {
  render() {
      return ( 
      <div className="review">      
      <h1>No Reviews</h1>
      <p> There are no reviews for this product </p>
      </div>
      );
  }
}


class Review extends React.Component {
	
   constructor(props){
	   super(props)
	   this.setState = {
		   avatar: this.props.avatar,
		   avatar_account: this.props.avatar_account,
		   title: this.props.title,
		   review: this.props.review,
		   stars: this.props.stars
	   }
   }
	
   render(){
	   return(
	      <div className="review">
	   <img src="img/5-stars" className="5stars" />
        <h1 className="review-title">Review Title</h1>
        <p className="review">The content of the review goes here.</p>
      </div>
	   )
   }
}

class ProductPage extends React.Component {
	
	constructor(props){
		super(props)
		this.setState = {
			product_image: this.props.product_image,
			title: this.props.title,
			product_id: this.props.product_id,
			description: this.props.description,
			average_stars: this.props.average_stars
			loading: true
		}
	}
	
   return(){
	   <div className="product-page">
        <div className="row1">
          <div className="product-info">
            <h1 className="title">Product Title</h1>
            <div className="description">
              <p>Information about the product goes here.</p>
            </div>
            <div className="product-image">
              <img src="img/product.png" alt="Product Image" />
            </div>
            <a className="big-button" id="add-to-cart">Add To Cart</a>
            <a className="big-button" id="one-click-order">One Click Order</a>
          </div>
        </div>
        <div className="reviews">
        </div>
      </div>
	  
   }
   
}



class App extends React.Component {
 render(){	 
      return(
	  <div className="review">      
      <h1>No Reviews</h1>
      <p> There are no reviews for this product </p>
      </div>
	  );
 }
}

ReactDOM.render(
<NoReviews/>
,document.querySelector(".reviews"))