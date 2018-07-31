import * as Types from './../contants/ActionTypes';


var initialState = {
    users: [
        {
            id: 1,
            name: 'nguyen duy khanh',
            birthday: '03-08-1995',
            sex: 'male',
            job: 'PHP Developer'
        },
        {
            id: 2,
            name: 'nguyen thi trang',
            birthday: '03-08-1996',
            sex: 'Female',
            job: 'Tester'
        },
        {
            id: 3,
            name: 'nguyen trung Hieu',
            birthday: '13-08-1992',
            sex: 'male',
            job: 'App Developer'
        },
        {
            id: 4,
            name: 'Le thi Hang',
            birthday: '21-07-1995',
            sex: 'Female',
            job: 'Android Developer'
        },
        {
            id: 5,
            name: 'nguyen hai anh',
            birthday: '10-08-1997',
            sex: 'male',
            job: 'IOS Developer'
        },
        {
            id: 6,
            name: 'Dam Thi Uyen',
            birthday: '17-02-1991',
            sex: 'Female',
            job: 'Tester Developer'
        },
        {
            id: 7,
            name: 'La Thi Hang',
            birthday: '01- 03 -1993',
            sex: 'Female',
            job: 'IOS Developer'
        },
        {
            id: 8,
            name: 'Truong Thanh Tung',
            birthday: '27-07-1985',
            sex: 'male',
            job: 'PHP Developer'
        }
    ],
    user: {}
}

const members = (state = initialState, action) => {
    var { member } = action;
    switch (action.type) {
        case Types.ADD_MEMBERS:
            return { ...state, users: [...state.users, member] };
        case Types.DELETE_MEMBERS:
            {
                const users = state.users.filter(user => user.id !== member.id);
                return { ...state, users }
            }
        case Types.EDIT_MEMBERS:
            return {
                ...state,
                user: action.member
            }

        case Types.CHANGE_MEMBER:
            const users = state.users.map(item => {
                if (item.id === member.id) {            
                    return item = member
                } else return item;
            });
            return { ...state, users }

            
        default : return state;
    }
}

export default members;