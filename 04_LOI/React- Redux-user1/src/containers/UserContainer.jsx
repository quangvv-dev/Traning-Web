import React, { Component } from 'react';
import { connect } from 'react-redux';
import { showUsers, changeUser } from './../actions/UsersAction';
import Users from './../components/Users';
import AddUser from './../components/AddUser';

class UserContainer extends Component {
    componentDidMount() {
        this.props.showUsers();
    }

    onSave = () => {
        const changeUser = {
            id: this.props.update.id,
            name: this.refs.name.value,
            birthday: this.refs.birthday.value,
            sex: this.refs.sex.value,
            job: this.refs.job.value
        }
        this.props.changeUser(changeUser);
    }
    render() {
        const showUser = this.props.user.map(itemUser => {
            return <Users key={itemUser.id} user={itemUser} />
        });
        return (
            <div className="container">
                <AddUser />
                <div className="table-responsive">
                    <table className="table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Birthday</th>
                                <th>Gender</th>
                                <th>Job</th>
                            </tr>
                        </thead>
                        {showUser}
                    </table>
                </div>

                <div className="modal fade" id="exampleModal" tabIndex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div className="modal-dialog" role="document">
                        <div className="modal-content">
                            <div className="modal-header">
                                <h5 className="modal-title" id="exampleModalLabel">Update User</h5>
                                <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div className="modal-body">
                                <form onSubmit={this.onSubmit}>
                                    <div className="form-group" >
                                        <label>Name:</label>
                                        <input type="text" name="name" defaultValue={this.props.update.name} className="form-control" ref="name" />
                                    </div>

                                    <div className="form-group" >
                                        <label>Birthday</label>
                                        <input type="text" name="birthday" defaultValue={this.props.update.birthday} className="form-control" ref="birthday" />
                                    </div>

                                    <div className="form-group" >
                                        <label>Gender</label>
                                        <input type="text" name="sex" defaultValue={this.props.update.sex} className="form-control" ref="sex" />
                                    </div>

                                    <div className="form-group" >
                                        <label>Job</label>
                                        <input type="text" name="job" defaultValue={this.props.update.job} className="form-control" ref="job" />
                                    </div>
                                    <div className="modal-footer">
                                        <button type="button" className="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" className="btn btn-primary" onClick={this.onSave}>Save changes</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

const mapStateToProps = state => {
    return ({
        user: state.Users.users,
        update: state.Users.user
    })
}
export default connect(mapStateToProps, { showUsers, changeUser })(UserContainer);