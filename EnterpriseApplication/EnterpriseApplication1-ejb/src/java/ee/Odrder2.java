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
public class Odrder2 implements Serializable {

   
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;
    private String custid;
    private String showid;
    private String showdate;
    private int nseats;
    private String cost;

    public String getCustid() {
        return custid;
    }

    public void setCustid(String custid) {
        this.custid = custid;
    }

    public String getShowid() {
        return showid;
    }

    public void setShowid(String showid) {
        this.showid = showid;
    }

    public String getShowdate() {
        return showdate;
    }

    public void setShowdate(String showdate) {
        this.showdate = showdate;
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

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    @Override
    public String toString() {
        return "ee.Odrder2[ id=" + id + " ]";
    }
    
}
