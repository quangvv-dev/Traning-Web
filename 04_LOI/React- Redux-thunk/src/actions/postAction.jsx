import { FECTH_POSTS,NEW_POST} from './type';

export const fetchPosts = () => dispatch => {
    fetch('https://jsonplaceholder.typicode.com/posts')
    .then(res => res.json())
    .then(posts => dispatch({
        type: FECTH_POSTS,
        payload: posts
    }));
}

export const createPost = (postData) => dispatch =>{
    fetch('https://jsonplaceholder.typicode.com/posts',{
        method : 'POST',
        headers : {
            'Content-type' : 'application/json'
        },
        body: JSON.stringify(postData)
    })
    .then(res => res.json())
    .then(post => dispatch({
        type: NEW_POST,
        payload: post
    }));
};