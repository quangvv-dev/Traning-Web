import { SHOW_USERS, ADD_USERS, UPDATE_USER,CHANGE_USER, DELETE_USER } from './../contants';
import { Users } from './../stores/db';

export const showUsers = () => dispatch =>{
    return dispatch({
        type: SHOW_USERS,
        payload: Users
    }) 
};

export const addUser = (user) => dispatch=>{
    return dispatch({
        type: ADD_USERS,
        payload: user
    }) 
};

export const updateUser = (updateUser) => dispatch =>{
    return dispatch({
        type: UPDATE_USER,
        payload: updateUser
    }) 
};

export const changeUser = (changeUser) => dispatch =>{
    return dispatch({
        type: CHANGE_USER,
        payload: changeUser
    });
}

export const deleteUser = (id) => dispatch =>{
    return dispatch({
        type: DELETE_USER,
        payload: id
    })
};