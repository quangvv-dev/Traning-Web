import { combineReducers } from 'redux';
import members from './members';

const appReducers = combineReducers({
    members
});

export default appReducers;