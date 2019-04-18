/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ss;

import ee.Datess;
import ee.Order1;
import ee.Register;
import ee.Show1;
import ee.ShowFinal;
import ee.Shows;
import java.util.List;
import javax.ejb.Local;

/**
 *
 * @author aarifuzma
 */
@Local
public interface SessionBeanRegisterLocal {

     public void persist(Object object);
    public void insert(String name, String password, String email, String phone);

    public Register findC(long id);

   
    public Register findN(String name, String password);

    public void insertShow(int id,String name, int seats);

    public void insertShow1(String name1, int seats1);

    public Register findName(String name);

    public List<ShowFinal> displayShow();

    public Show1 findSeats(long id);

    public void updateSeats(Show1 detachedsub);

    public Show1 findS(long id);

  public void findByID(long id,int seats);

    public Shows findS1(int id);

     public void updateSeat1(ShowFinal up1);

    public void insertShowFinal( String name,String veneue, int seat, String id );

    public ShowFinal findShowFinal(String id);

    public ShowFinal dell(String id);

    public List<Register> displayShowCust();

    public void insertOrder(int custid, String showid, String showdate, int nseats, String cost);

    public List<Order1> displayAllDetes(int uid);

    public List<Order1> displayAllOrder();

    public void insertDate(String showid, String date);

    public Datess findD(String showdate, String showid);

     public List<Datess> findSName(String Showid);

    public Order1 deleteO(Long id);

    public Order1 findO1(Long id);

  
   
    
}
