import { SHOW_USERS, ADD_USERS, UPDATE_USER, CHANGE_USER, DELETE_USER } from './../contants';

const initialState = {
    users: [],
    user: {}
}
export default function (state = initialState, action) {
    switch (action.type) {
        case SHOW_USERS:
            return {
                ...state,
                users: action.payload
            }

        case ADD_USERS:
            return {
                ...state,
                users: [...state.users, action.payload]
            }

        case UPDATE_USER:
            return {
                ...state,
                user: action.payload
            }

        case CHANGE_USER:
        return {...state, users: state.users.map(item =>{
            if(item.id === action.payload.id){
                item = action.payload;
            }
            return item;
        })}

        case DELETE_USER:
            return {
                ...state,
                users: [...state.users.filter(item => item.id !== action.payload)],
            }

        default:
            return state;
    }
}