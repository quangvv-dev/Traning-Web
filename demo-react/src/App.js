import React, { Component } from 'react';
import './App.css';
import Cource from './components/Cource';
import LifeCycle from './components/lifeCycle';

class App extends Component {
  /**thiết lập giá trị cho state */
    constructor(props){
      super(props);
      this.state = {
        test: "abc",
        items : [
          { 
            name : 'Bootstrap',
            free : true,
            desc : 'Xin chào các bạn đến với khóa học Bootstrap'
          },
          {
            name : 'Yii2',
            free : false,
            desc : 'Xin chào các bạn đến với khóa học Yii2'
          },
          {
            name : 'ReactJS',
            free : true,
            desc : 'Xin chào các bạn đến với khóa học ReactJS'
          }
          
        ],
      };
    }
    /*end state*/  
    componentWillMount(){
      setTimeout(()=>{
        this.setState({test: "cdsfsdfd"});
      }, 3000)
    }

  render() {
    /** lấy giá trị state của parent chuyền cho thằng children*/
    let listCource = this.state.items.map((item, index) => {
      return <Cource key = {index}  name={item.name} free={item.free}>{item.desc}</Cource>
    });
      

    return (
      <div className="App">
        {listCource}
       < LifeCycle test={this.state.test}/>
      </div>
    );

  }

}

export default App;
