var NewComponent = React.createClass({
  render: function() {
    return (

      <div className="review">
	   <img src="img/5-stars" className="5stars" />
        <h1 className="review-title">Review Title</h1>
        <p className="review">The content of the review goes here.</p>
      </div>
    );
  }
});