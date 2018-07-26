import { FECTH_POSTS,NEW_POST} from '../actions/type';

const initialState = {
    items: [],
    item:  {}
}

export default function(state = initialState, action){
    switch(action.type){
        case FECTH_POSTS:
            return{
                ...state,
                items: action.payload
            }
        case NEW_POST:
            return{
                ...state,
                item: action.payload
            }
        default:
        return state;
    }

}