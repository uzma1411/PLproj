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
public class Order implements Serializable {

    
    @Id @GeneratedValue int id;

    private int custid;
    private String showid;
    private String showdate;
    private int nseats;
    private String cost;

    public String getShowdate() {
        return showdate;
    }

    public void setShowdate(String showdate) {
        this.showdate = showdate;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getCustid() {
        return custid;
    }

    public void setCustid(int custid) {
        this.custid = custid;
    }

    public String getShowid() {
        return showid;
    }

    public void setShowid(String showid) {
        this.showid = showid;
    }

    public int getNseats() {
        return nseats;
    }

    public void setNseats(int nseats) {
        this.nseats = nseats;
    }

    public String getCost() {
        return cost;
    }

    public void setCost(String cost) {
        this.cost = cost;
    }

   
    
    @Override
    public String toString() {
        return "ee.Order[ id=" + id + " ]";
    }
    
}
