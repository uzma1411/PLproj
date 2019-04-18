/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ss;

import ee.Datess;
import ee.Order;
import ee.Order1;
import ee.Register;
import ee.Show1;
import ee.ShowFinal;
import ee.Shows;
import java.util.List;
import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.NoResultException;
import javax.persistence.PersistenceContext;
import javax.persistence.Query;
import java.lang.Integer;

/**
 *
 * @author aarifuzma
 */
@Stateless
public class SessionBeanRegister implements SessionBeanRegisterLocal {

    @PersistenceContext(unitName = "EnterpriseApplication1-ejbPU")
    private EntityManager em;

    @Override
    public void persist(Object object) {
        em.persist(object);
    }

    @Override
    public void insert(String name, String password, String email, String phone) {
        Register s = new Register();
        s.setName(name);
        s.setPassword(password);
        s.setEmail(email);
        s.setPhone(phone);

        em.persist(s);
    }
    
    @Override
    public void insertDate(String showid,String date)
    {
        Datess d =new Datess();
        d.setShowid(showid);
       d.setShowDate(date);
       
       em.persist(d);
    }
    
   
    @Override
    public Datess findD(String showdate,String showid) {
        try {
            Query q = em.createQuery("SELECT c FROM Datess AS c where  c.Showid = '" + showid + "' AND c.ShowDate ='" + showdate + "'");
            Datess c1 = (Datess) q.getSingleResult();
            return c1;
        } catch (NoResultException e) {
            return null;
        }
    }
    
    @Override
    public List<Datess> findSName(String Showid) {
        
            List q1 = em.createQuery("SELECT a FROM Datess AS a where a.Showid = :Showid").setParameter("Showid", Showid).getResultList();
                   
           return q1;
    }

    
    @Override
    public void insertShow(int id, String name1, int seats1) {
        Shows s1 = new Shows();
        s1.setId(id);
        s1.setName(name1);
        s1.setSeats(seats1);

        em.persist(s1);
    }

    @Override
    public void insertShowFinal(String name, String veneue, int seat, String id) {
        ShowFinal sf = new ShowFinal();
        sf.setId(id);
        sf.setName(name);
        sf.setVenue(veneue);
        sf.setSeats(seat);

        em.persist(sf);
    }

    @Override
    public ShowFinal findShowFinal(String id) {
        ShowFinal sf1 = em.find(ShowFinal.class, id);
        return sf1;
    }

    @Override
    public Register findC(long id) {
        return em.find(Register.class, id);
    }
    
   
    @Override
    public Register findN(String name, String password) {
        try {
            Query q = em.createQuery("SELECT c FROM Register AS c where c.name = '" + name + "' AND c.password ='" + password + "'");
            Register c1 = (Register) q.getSingleResult();

            return c1;
        } catch (NoResultException e) {
            return null;
        }
    }

    @Override
    public Register findName(String name) {
        try {
            Query q1 = em.createQuery("SELECT a FROM Register AS a where a.name = :name")
                    .setParameter("name", name);
            //Query q1 = em.createQuery("SELECT c FROM Register AS c where c.name = '" + name + "'");
            Register c = (Register) q1.getSingleResult();

            return c;
        } catch (NoResultException e1) {
            return null;
        }
    }

    @Override
    public void insertShow1(String name1, int seats1) {
        Show1 s1 = new Show1();

        s1.setName(name1);
        s1.setSeats(seats1);

        em.persist(s1);
    }

    @Override
    public void insertOrder(int custid, String showid, String showdate, int nseats, String cost) {
        Order1 o = new Order1();
        o.setCustid(custid);
        o.setShowid(showid);
        o.setShowdate(showdate);
        o.setNseats(nseats);
        o.setCost(cost);

        em.persist(o);
    }

    @Override
    public List<ShowFinal> displayShow() {
        Query q2 = em.createQuery("SELECT a FROM ShowFinal a");
        List<ShowFinal> e = (List<ShowFinal>) q2.getResultList();
        return e;
    }
    @Override
    public List<Order1> displayAllDetes(int custid) {
        
        try{
        Query q3 = em.createQuery("SELECT x FROM Order1 AS x where x.custid = :custid").setParameter("custid", custid);
        List<Order1> e1 = (List<Order1>) q3.getResultList();
        return e1;
    }
        catch(NoResultException e2){
            return null;
        }
    }
    
    @Override
    public List<Order1> displayAllOrder() {
        Query q3 = em.createQuery("SELECT x FROM Order1 x");
        List<Order1> e1 = (List<Order1>) q3.getResultList();
        return e1;
    }
    @Override
    public List<Register> displayShowCust() {
        Query q2 = em.createQuery("SELECT a FROM Register a");
        List<Register> e = (List<Register>) q2.getResultList();
        return e;
    }

    @Override
    public Show1 findSeats(long id) {
        try {
            Query x = em.createQuery("SELECT a from Show1 AS a where a.id = :id")
                    .setParameter("id", id);
            Show1 x1 = (Show1) x.getSingleResult();
            return x1;
        } catch (NoResultException e1) {
            return null;
        }
    }

    @Override
    public Show1 findS(long id) {
        Show1 k = em.find(Show1.class, id);
        return k;

    }

    @Override
    public void findByID(long id, int seats) {
        Query q3 = em.createQuery("UPDATE Show1 AS x SET x.seats = :seats where x.id = :id");
        q3.setParameter("id", id);
        q3.setParameter("seats", seats);
        q3.executeUpdate();

    }

    @Override
    public Shows findS1(int id) {
        Shows k = em.find(Shows.class, id);
        return k;

    }

    @Override
    public void updateSeat1(ShowFinal up1) {

        ShowFinal sd = em.merge(up1);
    }

    @Override
    public ShowFinal dell(String id) {
        ShowFinal sd = em.find(ShowFinal.class, id);
        if (sd == null) {
            return null;
        } else {
            em.remove(sd);
        }
        return sd;
    }

    @Override
    public Order1 findO1(Long id) {
        try{
        Order1 od = em.find(Order1.class, id);
        return od;

    }
        catch(NoResultException e1) {
            return null;
    }
    }
    @Override
    public Order1 deleteO(Long id)
    {
        Order1 od = em.find(Order1.class, id);
        if(od==null)
        {
            return null;
        }
        else
        {
            em.remove(od);
        }
        return od;
    }
    @Override
    public void updateSeats(Show1 up1) {

        Show1 sd = em.merge(up1);
    }
    // public void updateSeats(int id,int no)
    //  {
    // Query q1 = em.createQuery("UPDATE Show1 SET seats = :no WHERE id = :id");
    //   // int upC = q1.setParameter(Show1.seats,no).executeUpdate();
    //}
    //   public List<Show1> findShowByName (String name)
    // {
    //   List results = em.createQuery("SELECT * from Show1 a where a.name = :name")
    //                 .setParameter("name", name).getResultList();
    // return results;
    //}
}
