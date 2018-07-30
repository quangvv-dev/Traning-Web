import React, { Component } from 'react';
import { connect } from 'react-redux';
import { addUser } from './../actions/UsersAction';

class AddUser extends Component {
    constructor(props) {
        super(props);
        this.state = {
            id: '',
            name: '',
            birthday: '',
            sex: '',
            job: ''
        }
    }

    onChange = (e) => {
        this.setState({
            [e.target.name]: e.target.value
        });
    }

    onSubmit = (e) => {
        e.preventDefault();
        const user = {
            id: this.state.id,
            name: this.state.name,
            birthday: this.state.birthday,
            sex: this.state.sex,
            job: this.state.job
        }

        this.props.addUser(user);
    }
    render() {
        return (
            <div>
                <form onSubmit={this.onSubmit}>
                    <div className="form-group" >
                        <label>ID:</label>
                        <input type="text" name="id" className="form-control" onChange={this.onChange} />
                    </div>
                    <div className="form-group" >
                        <label>Name:</label>
                        <input type="text" name="name" className="form-control" onChange={this.onChange} />
                    </div>

                    <div className="form-group" >
                        <label>Birthday</label>
                        <input type="text" name="birthday" className="form-control" onChange={this.onChange} />
                    </div>

                    <div className="form-group" >
                        <label>Gender</label>
                        <input type="text" name="sex" className="form-control" onChange={this.onChange} />
                    </div>

                    <div className="form-group" >
                        <label>Job</label>
                        <input type="text" name="job" className="form-control" onChange={this.onChange} />
                    </div>
                    <button className="btn btn-primary" type="submit" name="submit">ADD USER</button>
                </form>
            </div>
        );
    }
}

export default connect(null, { addUser })(AddUser);