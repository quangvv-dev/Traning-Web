import React, { Component } from 'react';

class LifeCycle extends Component {
    constructor(props){
        super(props);
        this.state = {
            title : "LifeCycle"
        };
        console.log("constructor");
    }

    componentWillMount(){
        console.log("componentWillMount");
    }

    componentDidMount(){
        console.log("componentDidMount");
    }

    componentWillReceiveProps(nextProps){
        if(this.props.test  !== nextProps.test){
            this.setState({title:"asdjashdjksa"})
        }
        console.log("componentWillReceiveProps")
    }
    shouldComponentUpdate(nextProps, nextState){
        console.log("shouldComponentUpdate")
        return true;
    }
    componentWillUpdate(nextProps, nextState){
        console.log("componentWillUpdate")
    }
    componentDidUpdate(nextProps,  nextState){
        console.log("componentDidUpdate")
    }
    componentWillUnmount(){
        console.log("componentWillUnmount")
    }
    handleChangeLifeCycle = () => {
        this.setState({
            title: "change lifeCycle Success"
        })
    }

  render() {
    console.log("render")
    return (
      <div className="Cycle">
        <div className="col-sm-6 col-md-6">
            <div className="panel panel-success">
                <div className="panel-heading">
                        <h3 className="panel-title">{this.state.title}</h3>
                </div>
                <div className="panel-body"> 
                        <button type="button" onClick={this.handleChangeLifeCycle} className="btn btn-default">Change</button>
                </div>
            </div>
        </div>
      </div>
    );
  }
}

export default LifeCycle;
