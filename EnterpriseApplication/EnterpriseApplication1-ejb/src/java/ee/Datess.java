/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ee;

import java.io.Serializable;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

/**
 *
 * @author aarifuzma
 */
@Entity
public class Datess implements Serializable {

   
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;

  private String Showid;
  private String ShowDate;

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getShowid() {
        return Showid;
    }

    public void setShowid(String Showid) {
        this.Showid = Showid;
    }

    public String getShowDate() {
        return ShowDate;
    }

    public void setShowDate(String ShowDate) {
        this.ShowDate = ShowDate;
    }
  
    @Override
    public String toString() {
        return "ee.Datess[ id=" + id + " ]";
    }
    
}
