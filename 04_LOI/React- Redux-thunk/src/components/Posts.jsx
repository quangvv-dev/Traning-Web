import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { fetchPosts } from '../actions/postAction';


class Posts extends Component {
    componentDidMount(){
        this.props.fetchPosts();
    }

    componentWillReceiveProps(nextProps){
        if(nextProps.newPosts){
            this.props.posts.unshift(nextProps.newPosts);
        }
    }
    render() {
        const itemPost = this.props.posts.map(post => (
            <div key = {post.id}>
                <h3>{post.title}</h3>
                <p>{post.body}</p>
            </div>
        ));

        return (
            <div>
                {itemPost}
            </div>
        );
    }
}

const mapStateToProps = state =>({
    posts : state.posts.items,
    newPosts : state.posts.item
});

export default connect(mapStateToProps, { fetchPosts })(Posts);