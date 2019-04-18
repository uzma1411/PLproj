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
public class Show1 implements Serializable {

   
    @Id @GeneratedValue Long id;
    private String name;
    
  private int seats;
 
  
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getSeats() {
        return seats;
    }

    public void setSeats(int seats) {
        this.seats = seats;
    }
  
    
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

   
    @Override
    public String toString() {
        return "ee.Show1[ id=" + id + " ]";
    }
    
}
